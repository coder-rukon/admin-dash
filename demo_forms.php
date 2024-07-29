<?php include "header.php"; ?>
<section>
    <div class="row">

        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <h5>Example 01</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputFirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="First name" id="inputFirstName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputLastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last name" id="inputLastName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" id="inputEmail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="inputPassword">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <textarea name="" class="form-control" id="inputAddress" rows="3" placeholder="Apartment, studio, or floor"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" placeholder="City" id="inputCity">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" id="inputCheckbox">
                                    <label class="form-check-label" for="inputCheckbox">
                                        Check me out
                                    </label>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn">Sign in</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <h5>Example 02</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="yourInputFirstName" class="form-label">Your First Name</label>
                                    <input type="text" class="form-control" placeholder="Your First name" id="yourInputFirstName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="yourInputLastName" class="form-label">Your Last Name</label>
                                    <input type="text" class="form-control" placeholder="Your Last name" id="yourInputLastName">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="yourInputEmail" class="form-label">Your Email Address</label>
                                    <input type="email" class="form-control" placeholder="Your Email" id="yourInputEmail">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="yourInputMessage" class="form-label">Your Message</label>
                                    <textarea name="" class="form-control" id="yourInputMessage" rows="9" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn custom_example_02_btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <h5>Example 03</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputProductName" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" placeholder="Product Name" id="inputProductName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputProductThumbnail" class="form-label">Product Thumbnail</label>
                                    <input type="file" class="form-control" placeholder="Product Thumbnail" id="inputProductThumbnail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputProductMultipleImages" class="form-label">Product Multiple Images</label>
                                    <input type="file" class="form-control" placeholder="Product Multiple Images" id="inputProductMultipleImages" multiple="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputProductMinPrice" class="form-label">Product Min Price</label>
                                    <input type="number" min="0" step="0.01" class="form-control" placeholder="Product Min Price" id="inputProductMinPrice">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputProductMaxPrice" class="form-label">Product Max Price</label>
                                    <input type="number" min="0" step="0.01" class="form-control" placeholder="Product Max Price" id="inputProductMaxPrice">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputProductQuantity" class="form-label">Product Quantity</label>
                                    <input type="number" min="0" step="0.01" class="form-control" placeholder="Product Quantity" id="inputProductQuantity">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputProductCategory" class="form-label">Product Category</label>
                                    <select id="inputProductCategory" class="form-select">
                                        <option selected>Select Category</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputProductSubCategory" class="form-label">Product Sub-category</label>
                                    <select id="inputProductSubCategory" class="form-select">
                                        <option selected>Select Sub-category</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputProductType" class="form-label">Product Status</label>
                                    <select id="inputProductType" class="form-select">
                                        <option selected>Select Status</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group tags_input">
                                    <label for="inputProductSize" class="form-label">Product Size</label>
                                    <input type="text" class="form-control" value="small,medium,large" id="inputProductSize" data-role="tagsinput">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group tags_input">
                                    <label for="inputProductColor" class="form-label">Product Color</label>
                                    <input type="text" class="form-control" value="black,blue,white" id="inputProductColor" data-role="tagsinput">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group tags_input">
                                    <label for="inputProductTags" class="form-label">Product Tags</label>
                                    <input type="text" class="form-control" value="phone,smartphone,powerful" id="inputProductTags" data-role="tagsinput">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputProductVideoURL" class="form-label">Product Video URL</label>
                                    <input type="text" class="form-control" placeholder="Product Video URL" id="inputProductVideoURL">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputAgent" class="form-label">Agent</label>
                                    <select id="inputAgent" class="form-select">
                                        <option selected>Select Agent</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputProductShortDescription" class="form-label">Product Short Description</label>
                                    <textarea name="" class="form-control" id="inputProductShortDescription" rows="3" placeholder="Product Short Description"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputProductLongDescription" class="form-label">Product Long Description</label>
                                    <textarea name="inputProductLongDescription" class="form-control" id="inputProductLongDescription" rows="3" placeholder="Product Long Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Sale Product</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Hot Product</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox3">New Product</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox4">Featured Product</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox5">Discount Product</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn">Submit Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>

<?php include "footer.php"; ?>