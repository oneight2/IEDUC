<?php
include_once'app/module/register/action.php';
include_once 'app/module/register/list.php';
?>
<div class="container">
      <div class="form">
            <header  class="section-header">
                  <h3>Register</h3>
            </header>
            <form action="" method="post">
                  <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                  </div>
                  <div class="form-row">
                        <div class="form-group col-md-6">
                              <input type="date" class="form-control" name="birthDate" placeholder="Birth Date">
                        </div>
                        <div class="form-group col-md-6">
                              <select name="gender" id="gender"class="form-control" required>
                                    <option value="" disable-select>Choose your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                              </select>
                        </div>
                  </div>
                  <div class="form-row">
                        <div class="form-group col-md-6">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                              <input type="number" class="form-control" name="number" id="number" placeholder="Your Number Phone / Whatsapp"  data-msg="Please enter your numbe phone" />
                              <div class="validation"></div>
                        </div>
                  </div>
                  <div class="form-group">
                        <select name="programs" id="program"class="form-control" required>
                              <option value="" disable-select>Choose your programs</option>
                              <?php foreach ($programs as $row): ?>
                              <option value="<?= $row['judul']  ?>"><?= $row['judul']  ?></option>
                              <?php endforeach ?>
                        </select>
                  </div>
                  <div class="form-group">
                        <select name="tipe" id="program"class="form-control" required>
                              <option value="" disable-select>Choose your type programs</option>
                              <option value="Reguler">Reguler</option>
                              <option value="Intensive">Intensive</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <textarea type="text" rows="5" class="form-control" name="address" id="subject" placeholder="Your Address" /></textarea>
                        <div class="validation"></div>
                  </div>
                  <div class="text-center">
                        <button type="submit" name="register" class="btn-register">Register</button>
                  </div>
            </form>
      </div>
</div>