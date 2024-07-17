<?php include "header.php"; ?>

<section>

    <div class="row">

        <div class="col-12 col-sm-12 col-md-6 col-lg-6">

            <div class="card">
                <h5 class="card-header">HTML5 Form Basic</h5>
                <div class="card-body">
                    <div class="form-group">
                        <label for="formBasicInput1" class="form-label">Text</label>
                        <input type="text" class="form-control" id="formBasicInput1" placeholder="Text">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput2" class="form-label">Select</label>
                        <select class="form-select" aria-label="Default select example" id="formBasicInput2">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput3" class="form-label">Select Multiple</label>
                        <select class="form-select" multiple aria-label="Multiple select example" id="formBasicInput3">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput4" class="form-label">Textarea</label>
                        <textarea class="form-control" id="formBasicInput4" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Checkbox</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="formBasicInput5">
                            <label class="form-check-label" for="formBasicInput5">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="formBasicInput6" checked>
                            <label class="form-check-label" for="formBasicInput6">
                                Checked checkbox
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput7" class="form-label">Color Picker</label>
                        <input type="color" class="form-control form-control-color" id="formBasicInput7" value="#563d7c" title="Choose your color">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput8" class="form-label">Date</label>
                        <input type="date" class="form-control" id="formBasicInput8">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput9" class="form-label">Datetime Local</label>
                        <input type="datetime-local" class="form-control" id="formBasicInput9">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput10" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formBasicInput10" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput11" class="form-label">File</label>
                        <input type="file" class="form-control" id="formBasicInput11">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput12" class="form-label">Month</label>
                        <input type="month" class="form-control" id="formBasicInput12">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput13" class="form-label">Password</label>
                        <input type="password" class="form-control" id="formBasicInput13">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Radio</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="formBasicInput14">
                            <label class="form-check-label" for="formBasicInput14">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="formBasicInput15" checked>
                            <label class="form-check-label" for="formBasicInput15">
                                Default checked radio
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput16" class="form-label">Range</label>
                        <input type="range" class="form-range" id="formBasicInput16">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput17" class="form-label">Search</label>
                        <input type="search" class="form-control" id="formBasicInput17">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput18" class="form-label">Tel</label>
                        <input type="tel" class="form-control" id="formBasicInput18">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput19" class="form-label">Time</label>
                        <input type="time" class="form-control" id="formBasicInput19">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput19" class="form-label">Url</label>
                        <input type="url" class="form-control" id="formBasicInput19">
                    </div>
                    <div class="form-group">
                        <label for="formBasicInput19" class="form-label">Week</label>
                        <input type="week" class="form-control" id="formBasicInput19">
                    </div>
                </div>
            </div>

            <div class="card">
                <h5 class="card-header">Inline Forms</h5>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <h5 class="card-header">Form Text</h5>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputPassword5" class="form-label">Password</label>
                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">Password</label>
                            </div>
                            <div class="col-auto">
                                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                            <div class="col-auto">
                                <span id="passwordHelpInline" class="form-text">
                                    Must be 8-20 characters long.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <h5 class="card-header"></h5>
                <div class="card-body">
                    <div class="form-group"></div>
                </div>
            </div>

            <div class="card">
                <h5 class="card-header"></h5>
                <div class="card-body">
                    <div class="form-group"></div>
                </div>
            </div>


        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6"></div>

    </div>

</section>

<?php include "footer.php"; ?>