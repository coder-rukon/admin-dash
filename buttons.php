<?php include "header.php"; ?>

<section class="data_tables">

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="table_title">Base class</h5>
                    <button type="button" class="btn">Base class</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="table_title">Variants</h5>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>

                    <button type="button" class="btn btn-link">Link</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="table_title">Button tags</h5>
                    <a class="btn btn-primary" href="#" role="button">Link</a>
                    <button class="btn btn-primary" type="submit">Button</button>
                    <input class="btn btn-primary" type="button" value="Input">
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-primary" type="reset" value="Reset">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="table_title">Outline buttons</h5>
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-light">Light</button>
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="table_title">Sizes</h5>
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                    <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                    <br><br>
                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                    <br><br>
                    <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        Custom button
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="table_title">Disabled state</h5>
                    <button type="button" class="btn btn-primary" disabled>Primary button</button>
                    <button type="button" class="btn btn-secondary" disabled>Button</button>
                    <button type="button" class="btn btn-outline-primary" disabled>Primary button</button>
                    <button type="button" class="btn btn-outline-secondary" disabled>Button</button>
                    <br><br>
                    <a class="btn btn-primary disabled" role="button" aria-disabled="true">Primary link</a>
                    <a class="btn btn-secondary disabled" role="button" aria-disabled="true">Link</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="table_title">Link functionality caveat</h5>
                    <a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
                    <a href="#" class="btn btn-secondary disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="table_title">Block buttons</h5>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                    <br><br>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                    <br><br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                    <br><br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="table_title">Toggle states</h5>
                    <p class="d-inline-flex gap-1">
                        <button type="button" class="btn" data-bs-toggle="button">Toggle button</button>
                        <button type="button" class="btn active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
                        <button type="button" class="btn" disabled data-bs-toggle="button">Disabled toggle button</button>
                    </p>
                    <p class="d-inline-flex gap-1">
                        <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle button</button>
                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
                        <button type="button" class="btn btn-primary" disabled data-bs-toggle="button">Disabled toggle button</button>
                    </p>
                    <br><br>
                    <p class="d-inline-flex gap-1">
                        <a href="#" class="btn" role="button" data-bs-toggle="button">Toggle link</a>
                        <a href="#" class="btn active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
                        <a class="btn disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
                    </p>
                    <p class="d-inline-flex gap-1">
                        <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Toggle link</a>
                        <a href="#" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
                        <a class="btn btn-primary disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include "footer.php"; ?>