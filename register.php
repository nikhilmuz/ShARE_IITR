<?php include_once('components/header.php'); ?>
<style type="text/css">
@import url("assets/css/register.css");
</style>
<script>
    $('#register_nav').css('font-weight','bold');
    document.title='Register | Global Strategy Case Challenge';
</script>
<div id="fullpage">
    <div class="section">
<div class="row map-bg content">
    <div class="col-md-12"><p class="topic" align="center">Register Your Team</p></div>
    <div class="row col-md-12">
        <div class="col-md-3"></div>
        <div class="col-md-6 form-well">
            <p class="head-text" align="center">TEAM DETAILS</p>
            <p class="form-field-name">Team Name</p>
            <input class="form-field" type="text" />
            <p class="form-field-name">Number of Members</p>
            <input class="form-field" type="number" />
            <p class="head-text separation" align="center">MEMBER DETAILS</p>
            <div class="row members">
            <div class="col-md-3 active-member">Leader</div>
            <div class="col-md-3">Member 2</div>
            <div class="col-md-3">Member 3</div>
            <div class="col-md-3 deactive-member">Member 4</div>
            </div>
            <p class="form-field-name">Name</p>
            <input class="form-field" type="text" />
            <p class="form-field-name">University</p>
            <input class="form-field" type="text" />
            <p class="form-field-name">Contact Number</p>
            <input name="phone" class="form-field" type="number" />
            <p class="form-field-name">Email - id</p>
            <input class="form-field" type="email" />
            <p align="center"><input class="btn solid-btn submit" type="button" value="Submit"></p>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php include_once('components/footer.php'); ?>
