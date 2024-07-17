<?php include "header.php"; ?>

<section>

    <div class="row">

        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Basic Style</h5>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="basicStyle1" class="form-label">Default Form</label>
                                <input type="text" class="form-control" placeholder="Default Name" id="basicStyle1">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="basicStyle2" class="form-label">Dropdown Form</label>
                                <select class="form-select" id="basicStyle2">
                                    <option selected>Dropdown Names</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="basicStyle3" class="form-label">Upload File</label>
                                <input type="file" class="form-control" id="basicStyle3">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="basicStyle4" class="form-label">Disabled</label>
                                <input class="form-control" type="text" placeholder="This is disabled field" id="basicStyle4" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="basicStyle5" class="form-label">Message Form</label>
                                <textarea class="form-control" id="basicStyle5" rows="7" placeholder="Type your message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group tags_input">
                                <label for="basicStyle6" class="form-label">Form with Tag</label>
                                <input type="text" class="form-control" placeholder="Input Field" id="basicStyle6" data-role="tagsinput">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Checkboxes, Radios and Selects</h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Check Box
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Selected Box
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                                        Fixed Selected
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                                    <label class="form-check-label" for="flexCheckDisabled">
                                        Disable Check Box
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Unselected
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Selected
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
                                    <label class="form-check-label" for="flexRadioCheckedDisabled">
                                        Fixed Selected
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        Disabled Button
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <select class="form-select" multiple aria-label="Multiple select example">
                                    <option>Category Name</option>
                                    <option value="1">Sub Category</option>
                                    <option value="2" selected>Sub Category</option>
                                    <option value="3">Category Name</option>
                                    <option value="3" selected>Category Name</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Unselected Option</option>
                                    <option selected value="1">Selected Option</option>
                                    <option disabled value="2">Disable Option</option>
                                    <option value="3">Selectable Option</option>
                                </select>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Toggles</h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="basicStyle6" class="form-label">Checkbox Toggle</label>
                                <div class="fg_switch">
                                    <label>
                                        <input class="form-check-input" type="checkbox">
                                        <div>
                                            <span class="on">ON</span>
                                            <span class="off">OFF</span>
                                        </div>
                                        <span>Checkbox Toggle</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<?php include "footer.php"; ?>