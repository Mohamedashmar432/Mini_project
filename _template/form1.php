<?php
include_once("./libs/user.class.php");
if ($_POST['headline'] != null && $_POST['price'] != null && $_POST['address'] != null && $_POST['email'] != null) {
    $headline = $_POST['headline'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $email = $_POST['email'];
    $result = user::sell($headline, $price, $address, $email);
    if ($result) {
?><div class="alert alert-success" role="alert">
  Your Application has been sibmitted. it will be validate within 24 hrs and our team will reach out you. <a href="main.buyer.php" class="alert-link">Click here</a> to see more intresting Business.
</div><?php
                } else {
                    ?><div class="alert alert-danger" role="alert">
                    Something went wrong, try again later <a href="index.php" class="alert-link">Click here</a> to back to Home.
                  </div><?php
                }
            }

                    ?>


<div class=mar>
    <h2>Tell us about your business</h2><br>
    <pre class="fs-6">You may keep certain information confidential but keep in mind,the more details you provide the more effective your listing will be.</pre>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <div class="mb-3">
            <label class="form-label">What type of Business is this?</label>
            <select class="form-select" aria-label="Default select example" name="Business" required>
                <option value="1">Franchise</option>
                <option value="2">Restaurants</option>
                <option value="3">Gas Stations</option>
                <option value="4">Storage and Warehousing</option>
                <option value="5">Hotels</option>
                <option value="6">Websites and Ecommerce</option>
                <option value="7">Manufacturing Business</option>
                <option value="8">Pharmacies</option>
                <option value="9">car Washes</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">What type of Business is this?</label>
            <select class="form-select" aria-label="Default select example" name="scale" required>
                <option value="1">Small Scale(1 - 5 Lakhs)</option>
                <option value="2">Medium Scale(5 - 50 Lakhs)</option>
                <option value="2">Large Scale(50 lakhs Above)</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Headline for your Business</label>
            <input type="text" class="form-control" name="headline" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Business Address</label>
            <input type="text" class="form-control" name="address" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Business Email Address</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Deal price</label>
            <input type="text" class="form-control" name="price" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Listing & Search Visibility</label>
            <select class="form-select" aria-label="Default select example" name="visible" required>
                <option value="1">Show in your Locality</option>
                <option value="2">Show only in your state</option>
                <option value="2">Show city and country</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">About your Business</label>
            <textarea class="form-control" rows="3" name="about" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label"> business Image to visible</label>
            <input class="form-control" type="file" id="formFile" name="image" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" name="check" required>
            <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
</div>
<button type="submit" class="btn btn-primary" id="but1"  required>Submit</button>
</form>
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Buzhub</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Your busines will validate by our team and added to our business selling list within 24 hrs.
            </div>
            <div class="modal-footer">
                <a href="index.php" class="btn btn-primary">Home</a>
            </div>
        </div>
    </div>
</div> -->


</div>