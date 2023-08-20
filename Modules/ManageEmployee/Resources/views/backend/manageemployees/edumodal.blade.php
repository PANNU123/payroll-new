<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" id="ajaxModelCategory" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="modelHeading" >Modal Heading</h5>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate id="CategoryForm">
                    <div class="row">
                        <div class="col-md-6">

                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Name"  required>

                        </div>
                        <div class="col-md-6">

                                <label for="validationCustom01" class="form-label">Institute</label>
                                <input type="text" class="form-control" name="institute" id="institute"
                                       placeholder="Institute"  required>

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">

                                <label for="validationCustom01" class="form-label">Passing Year</label>
                                <input type="number" class="form-control" name="passing_year" id="passing_year"
                                       placeholder="Passing Year"  required>

                        </div>
                        <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Result</label>
                                <input type="text" class="form-control" name="result" id="result"
                                       placeholder="Result"  required>
                        </div>
                    </div>
                     <br>
                    <div class="row">
                        <div class="col-md-6">

                                <label for="validationCustom01" class="form-label">Degree Type</label>
                                <input type="text" class="form-control" name="degree_type" id="degree_type"
                                       placeholder="Degree Type"  required>

                        </div>
                        <div class="col-md-6">

                                <label for="validationCustom01" class="form-label">Achievement Date</label>
                                <input type="date" class="form-control" name="achievement_date" id="achievement_date"
                                       placeholder="Achievement Date"  required>

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">

                            <label for="validationCustom01" class="form-label">Description</label>
                            <textarea type="text" class="form-control" name="description" id="description"></textarea>

                        </div>
                    </div>

                    <div class="pt-3"></div>

                    <div class="d-flex justify-content-between">
                        <a href="javascript:void(0)" class="btn btn-danger close text-white">Close</a>
                        <button class="btn btn-primary" type="submit" id="saveBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
