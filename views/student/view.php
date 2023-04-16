

<a href="/student/index" class="btn btn-sm btn-primary">Back</a>

  <div class="form-row">
    <div class="col">
    <label for="name"><b>Name:</b></label>
     <?=   $user->name; ?>

    </div>
    <div class="col">
    <label for="email"><b>Email:</b></label>
   <?= $user->email; ?>
    </div>
  </div>
  <div class="form-row">
    <div class="col">
    <label for="country"><b>Country:</b></label>
     <?=   $user->country; ?>

    </div>
    <div class="col">
    <label for="city"><b>City:</b></label>
   <?= $user->city; ?>
    </div>
  </div>


  <div class="form-row">
    <div class="col">
    <label for="district"><b>District:</b></label>
     <?=   $user->district; ?>

  
  </div>
</form>
