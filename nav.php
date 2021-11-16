<style>
    .menu_back{
        width: 100%;
        height: 60px;
        position: fixed;
        top:0px;
        background-color: #07252d;
        display: flex;
        justify-content: center;
    }
    .menu{
        width: 800px;
        display: flex;
    }
    .menu a{
        width: 80px;
        height: 40px;
        margin-left: 20px;
        margin-top: 10px;
        background-color: red;
        border-radius: 15px;
    }
</style>
<header class="menu_back">
    <div class ="menu">
        <a href="index.php?year=<?= ($year) ?>&month=<?= ($month)?>"></a>
        <a href="year.php?year=<?= ($year) ?>"></a>
    </div>
</header>