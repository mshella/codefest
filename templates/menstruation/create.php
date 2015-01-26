<!-- Button trigger modal -->
<div>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#start">Start date</button>
</div><br>
<div>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#end">End date</button>
</div>

<!-- Start Date Form -->
<div class="modal fade" id="start" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Input start date</h4>
                </div>
                <div class="modal-body">
                  <form>
                        Start Date:
                        <?php //echo $form->formatInput('start_date') ?>
                      <input type="date" name="start_date">
                  </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <input type="submit" value="Save"> -->
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Date Form -->
<div class="modal fade" id="end" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Input start date</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div>
                            Start Date:
                            <input type="date" name="start_date">
                        </div><br>
                        <div>
                            End Date:
                            <input type="date" name="end_date">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>