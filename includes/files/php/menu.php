<script type="text/javascript" src="includes/jquery/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- top 2 lines including jquery -->

<script>
    //preparing the jquery
    //with this script you can donwload the menu version of the pdf. If this would be html you could change the file you are downloading.
    $(document).ready(function () {
        $('#Button').click(function (e) {
            e.preventDefault();  //stop the browser from following
            window.location.href = 'includes/menuPdf.pdf'; //download the file
        });
    });
</script>


<div id="menuContainer">


    <section id="menuPage">
        <h1 id="menuTitle">Our Kitchen and Bar</h1>
        <div class="box">

        <div id="menufoodtext">
            <h2>Food</h2>
        </div>
            <div id="menufood">
            <ul id="menuList">
                <div class="food">
                <li>Pain, Croissant or Petit pain</li>
                <li>Pain Naturel</li>
                <li>Butter</li>
                <li>Herb butter</li>
                <li>Jam or Nutella</li>
                <li>Brie or camembert</li>
                <li>Cheese with walnuts</li>
                <li>Cream cheese</li>
                <li>Soft goat cheese</li>
                <li>Smole Salmon</li>
                <li>Tuna salad</li>
                <li>Egg salad</li>
                </div>

                <div class="euros">
                    <li>€1,30</li>
                    <li>€2,30</li>
                    <li>€2,80</li>
                    <li>€3,30</li>
                    <li>€4,50</li>
                    <li>€4,70</li>
                    <li>€4,80</li>
                    <li>€4,80</li>
                    <li>€5,80</li>
                    <li>€4,80</li>
                    <li>€4,80</li>
                </div>
            </ul>
            </div>

        <div id="menudrinkstext">
            <h2>Drinks</h2>
        </div>
            <div id="menudrinks">
            <ul>
                <div class="drinks">
                <li>Coffee and Tea</li>
                <li>Cappucinno</li>
                <li>Latte</li>
                <li>Mocha</li>
                <li>Espresso</li>
                <li>Americano</li>
                <li>Flat White</li>
                <li>Thé</li>
                <li>Cold drinks</li>
                <li>Homemade lemonade</li>
                <li>Jus d'orange</li>
                <li>Jus de pomme</li>
                <li>Ice Tea</li>
                <li>Eau Minerale</li>
                <li>Eau Petillante</li>
                </div>

                <div class="euros1">
                    <li>€3,00</li>
                    <li>€3,00</li>
                    <li>€3,00</li>
                    <li>€2,00</li>
                    <li>€3,50</li>
                    <li>€2,80</li>
                    <li>€2,00</li>
                    <li>€3,00</li>
                    <li>€2,30</li>
                    <li>€2,30</li>
                    <li>€2,50</li>
                    <li>€2,00</li>
                    <li>€2,30</li>
                    <li>€2,30</li>
                </div>
            </ul>
            </div>
            <button id="Button">Download PDF</a></button>
        </div>
    </section>
</div>

