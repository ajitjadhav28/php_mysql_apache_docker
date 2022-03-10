<div class="container">
    <form action="/store-data.php" method="post" id="stud_data" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" name="fname" class="form-control" id="first_name" placeholder="Sudha">
        </div>
        <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" name="lname" class="form-control" id="last_name" placeholder="Murty">
        </div>
        <input id="form-submit-btn" type="button" class="btn btn-primary" value="Send" />
        <input  type="reset" class="btn btn-secondary" value="Clear"/>
    </form>
</div>