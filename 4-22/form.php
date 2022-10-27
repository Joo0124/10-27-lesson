<h1>
<?php include 'formhuleenavalt.php';?>
</h1>
<form action="index.php" method="POST" >
    <h2>Calculator</h2>
    <input name="nomer1" type="number" placeholder="#1" required />
    <?php zugeerprinthiigerei(); ?>
    <input name="nomer2" type="number" placeholder="#2" required />
    <select required name="uildel" class="form-select" aria-label="Uildel">
         <option selected></option>
         <option value="+">+</option>
         <option value="-">-</option>
         <option value="*">*</option>
         <option value="/">/</option>
    </select>
    <?php konop(); ?>
    <?php konop(); ?>
    <?php konop(); ?>
 </form>  