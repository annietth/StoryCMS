<h1><?= $post[0]["title"] ?></h1>
<div class="infoComplementaire">
    <span class="auteur">Rédigé par <?= $post[0]["auteur"] ?></span>
    <span class="modification">Dernière modification le <?= $post[0]["date"] ?></span>
</div>
<p>
    <?= $post[0]["content"] ?>
</p>

<style>

h1 {
    margin-bottom: 0.2em;
}

.infoComplementaire {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.auteur {
    width: 200px;
    text-align: center;
    background: #ff416c;
    background: -webkit-linear-gradient(to right, #ff416c, #ff4b2b);
    background: linear-gradient(to right, #ff416c, #ff4b2b);
    color: white;
    text-align: center;
    padding: 0.3em 1em;
    border-radius: 30px;
    transition: 0.3s all ease-in-out;
}

.modification {
    margin-left: 1em;
}

/* CSS PROVISOIRE DE LA NAVBAR*/

.navbar {
    font-size: 18px;
    background: #ff416c;
    background: -webkit-linear-gradient(to right, #ff416c, #ff4b2b);
    background: linear-gradient(to right, #ff416c, #ff4b2b);
    padding-bottom: 10px;
    position: sticky;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.main-nav {
    list-style-type: none;
    display: none;
}

.nav-links,
.logo {
    text-decoration: none;
    color: #fff;
}

.main-nav li {
    text-align: center;
    margin: 15px auto;
}

.logo {
    display: inline-block;
    font-size: 22px;
    margin-top: 10px;
    margin-left: 20px;
}

.navbar-toggle {
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer;
    color: #fff;
    font-size: 24px;
}

#chkToggle {
    display: none;
}

#chkToggle:checked+ul.main-nav {
    display: block;
}

@media screen and (min-width: 768px) {
    .navbar {
        display: flex;
        justify-content: space-between;
        padding-bottom: 0;
        height: 70px;
        align-items: center;
    }
    #chkToggle:checked+ul.main-nav {
        display: flex;
    }
    .main-nav {
        display: flex;
        margin-right: 30px;
        flex-direction: row;
        justify-content: flex-end;
    }
    .main-nav li {
        margin: 0;
    }
    .nav-links {
        margin-left: 40px;
    }
    .logo {
        margin-top: 0;
    }
    .navbar-toggle {
        display: none;
    }
    .logo:hover,
    .nav-links:hover {
        color: #fff;
    }
}

/* CSS PROVISOIRE DU MASTER */

html, body {
    height: 100%;
}

html {
    display: table;
    margin: auto;
}

body {
    display: table-cell;
    vertical-align: middle;
}

a {
    text-decoration: none;
    color: inherit;
}

.btnStyle1 {
    background: #ff416c;
    background: -webkit-linear-gradient(to right, #ff416c, #ff4b2b);
    background: linear-gradient(to right, #ff416c, #ff4b2b);
    color: white;
    text-align: center;
    padding: 0.3em 1em;
    border-radius: 30px;
    transition: 0.3s all ease-in-out;
}

.btnStyle1:hover {
    transform: scale(0.9);
}

.wrapper {
    width: 1000px;
    min-height: 300px;
    max-height: 600px;  
    border: 1px solid rgb(245 245 245);
    border-radius: 10px;
    color: #000;
    -webkit-box-shadow: 0 7px 30px -10px rgba(150,170,180,0.5); 
    box-shadow: 0 7px 30px -10px rgba(150,170,180,0.5);
}

.wrapperBody {
    max-height: 500px;
    padding: 0 1em 1em 1em;
    overflow: auto;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

</style>