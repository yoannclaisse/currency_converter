<?php
    include './includes/config.php';
    include './includes/header.php';
    include './includes/apiCall.php';
    include './includes/handleForm.php';
    include './includes/apiSettings.php';

?>

<!-- TITLE WITH COLOR -->
<h1 class="title">
    <span class="spanOne">Convert</span>
    <span class="spanTwo">your</span>
    <span class="spanThree">currencies</span>
</h1>

<!-- FORM -->
<form action="#" method="post">
    <!-- AMOUNT INPUT -->
    <fieldset class="amount">
        <label class="labelAmount" for="amount">Amount</label>
        <input class="inputAmount" type="number" name="amount" id="amount" value="<?=$amountWritten?>">
    </fieldset>

    <!-- FROM INPUT -->
    <fieldset class="from">
        <label for="browsers">From</label>
        <select name="from" id="from">
            <!-- FOREACH FOR LOCAL ARRAY CODE-->
            <?php foreach ($code as $key => $value): ?>
                <option value="<?= $value->code ?> <?= $value->description?> ">
                    <?= $value->code?> - <?= $value->description?>
                </option>
            <?php endforeach ?>
        </select>
    </fieldset>
    
    <!-- CHANGE CURRENCY -->
    <div class="imageChange">
        <p> </p>
        <div class="imageSize">
            <img src="./assets/images/arrow_change_white.png" alt="change" >
        </div>
    </div>

    <!-- TO INPUT -->
    <fieldset class="to">
        <label for="browser">To</label>
        <select name="to" id="to">
            <!-- FOREACH FOR LOCAL ARRAY CODE-->
            <?php foreach ($code as $key => $value): ?>
                <option value="<?= $value->code ?> <?= $value->description?> ">
                    <?= $value->code?>: <?= $value->description?>
                </option>
            <?php endforeach ?>
        </select>
    </fieldset>

    <!-- SUBMIT INPUT -->
    <fieldset class="submit">
        <p> </p>
        <input type="submit" value="Convert">
    </fieldset>
</form>

<!-- DIV RESULT -->
<div class="result">
    <h3>Convertion</h3>
    <div class="convertionField">
        <?= $resultFinal ?>
    </div>
</div>

<!-- DYNAMIC H2 BEFOR AND AFTER SUBMIT -->
<h2 class="h2">Hello 👋 <?=$convertText?> </h2>

<!-- FOREACH FOR CARD(S) AFTER SUBMIT -->
<?php foreach($convertResult2 as $key => $value): ?>
    <div class="info">
        <!-- INFO COUNTRIES -->
        <div class="infoCountries">
            <div class="leftContent">
                <img class="imageFlag" src="<?= $value->flags->svg ?>" alt="flags_country" width="80%">
            </div>
            <div class="rightContent">
                <div class="titleCard">
                    <!-- COUNTRY NAME -->
                    <div class="countryName"><?= $value->name->official ?></div>
                </div>
                <div class="contentCard">
                    <!-- COUNTRY CAPITAL -->
                    <div class="countryCapital">Capital : <span> <?= $value->capital[0]?> </span></div>
                    <!-- POPULATION -->
                    <div class="population">Population: <span> <?= $value->population?></span> </div>
                </div>
                <!-- BUTTON TO GOOGLE MAP -->
                <div class="button">
                    <div class="googleLink"> <a href="<?= $value->maps->googleMaps?>">Map</a> </div>
                </div>
            </div>
        </div>
        <!-- SEPARATION LINE -->
        <div class="separation">
        <div class="line"></div>
        <div class="circle"></div>
    </div>
    </div>
<?php endforeach ?>

<!-- FOOTER -->
<?php include './includes/footer.php' ?>