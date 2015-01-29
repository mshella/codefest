<?php

namespace App\Controller;

use \Norm\Controller\NormController;

/**
 * Base Controller
 */
class BaseController extends NormController
{
    /**
     * Get the criteria from the request
     *
     * @return array criteria that will be used to get the record(s)
     */
    public function getCriteria()
    {
        $criteria = parent::getCriteria();
        $criteria = array_merge(array('status' => 1), $criteria);

        return $criteria;
    }

    /**
     * Trashed a single record
     *
     * @param mixed $id The identifier of the Model
     *
     * @return Response
     */
    public function delete($id)
    {
        if ($this->request->isPost() || $this->request->isDelete()) {
            $id = explode(',', $id);

            foreach ($id as $value) {
                $model = $this->collection->findOne($value);
                $model->set('status', 0);
                $model->save();
            }

            $this->flash('info', $this->clazz.' trashed.');
            $this->redirect($this->getRedirectUri());
        }

        $this->data['ids'] = $id;
    }

    /**
     * Getter of collection name
     * Collection name usually mapped to table name or collection name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Getter of collection class
     * @return string
     */
    public function getClass()
    {
        return $this->clazz;
    }

    /**
     * Getter of connection
     * @return Norm\Connection
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Restore a single record
     *
     * @param string $id The identifier of the Model
     *
     * @return Response
     */
    public function restore($id)
    {
        if ($this->request->isPost() || $this->request->isDelete()) {
            if ($this->request->isPost() || $this->request->isDelete()) {
                $id = explode(',', $id);

                foreach ($id as $value) {
                    $model = $this->collection->findOne($value);
                    $model->set('status', 1);
                    $model->save();
                }

                $this->flash('info', $this->clazz.' restore.');
                $this->redirect($this->getRedirectUri());
            }
        }
    }

    public function create()
    {
        $entry = $this->collection->newInstance()->set($this->getCriteria());

        if ($this->request->isPost()) {
            try {
                $result = $entry->set($this->request->post())->save();

                h('notification.info', $this->clazz.' created.');

                h('controller.create.success', array(
                    'model' => $entry
                ));

                $this->redirect($this->getRedirectUri());
            } catch (\Slim\Exception\Stop $e) {
                throw $e;
            } catch (\Exception $e) {

                h('notification.error', $e);

                h('controller.create.error', array(
                    'model' => $entry,
                    'error' => $e,
                ));

                // $this->flashNow('error', $e);
            }

        }

        $this->data['entry'] = $entry;
    }

    public function update($id)
    {
        try {
            $entry = $this->collection->findOne($id);
        } catch (\Exception $e) {
        }

        if (is_null($entry)) {
            return $this->app->notFound();
        }

        if ($this->request->isPost() || $this->request->isPut()) {

            try {
                $merged = array_merge(
                    isset($entry) ? $entry->dump() : array(),
                    $this->request->post() ?: array()
                );
                $entry->set($merged)->save();

                h('notification.info', $this->clazz.' updated');

                h('controller.update.success', array(
                    'model' => $entry,
                ));
                $this->redirect($this->getRedirectUri());
            } catch (\Slim\Exception\Stop $e) {
                throw $e;
            } catch (\Exception $e) {
                h('notification.error', $e);

                if (empty($entry)) {
                    $model = null;
                }

                h('controller.update.error', array(
                    'error' => $e,
                    'model' => $entry,
                ));
            }
        }
        $this->data['entry'] = $entry;
    }
}
