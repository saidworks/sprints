<?php 
header('Content-Type: text/css');
?>
@import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,700;1,700&display=swap");
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline; }


article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block; }

body {
  line-height: 1; }

ol, ul {
  list-style: none; }

blockquote, q {
  quotes: none; }

blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

:root {
  font-size: var(--font-medium); }

:root {
  font-size: 62.5%;
  --font-small: 2rem;
  --font-medium: 4rem;
  --font-big: 6rem;
  --h1: 5rem;
  --font-color:#7e1d11;
  --main-color:#727272; }

.footer {
  background-color: var(--font-color);
  color: var(--main-color);
  font-weight: 700;
  font-size: var(--font-small);
  position: fixed;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw; }
  .footer img {
    width: 50%; }
  @media screen and (min-width: 768px) {
    .footer {
      width: 100%;
      position: fixed;
      padding: 1% 0%;
      bottom: 0;
      background-color: var(--font-color);
      color: var(--main-color);
      font-weight: 700;
      font-size: var(--font-small);
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center; }
      .footer img {
        width: 50%; } }

.main__about form {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  font-size: var(--font-medium); }
  .main__about form .btn {
    background-color: var(--font-color);
    color: var(--main-color);
    border-radius: 15rem;
    font-size: var(--font-small); }
  .main__about form input[type='text'] {
    width: 15%;
    height: var(--font-medium); }
  .main__about form input[type='email'] {
    width: 15%;
    height: var(--font-medium); }

.main__about .dash {
  border: 1px solid black;
  padding: 1%; }

.main__about .dash {
  width: 100%; }

body {
  max-width: 100%;
  background-color: var(--main-color);
  color: var(--font-color); }

.main__title {
  font-size: var(--h1);
  text-align: center;
  font-weight: 700;
  font-style: italic; }

.main__about {
  margin: 5%;
  font-size: var(--font-small); }

.main__sidebar {
  position: absolute;
  text-align: center;
  margin-top: -11vh;
  margin-left: 30vw;
  max-width: 100vw; }
  .main__sidebar .sidebar-collection {
    display: flex;
    width: 40vw;
    justify-content: space-between;
    align-items: center; }

.main__products {
  display: flex;
  flex-direction: column;
  height: 100vh;
  overflow: visible; }
  .main__products .products-panel {
    flex: 1;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
    width: 95vw;
    margin: 2%;
    opacity: 30%; }
  <?
    require_once "../php/config.php";
    $sql = "SELECT * FROM products";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC); 
    //use the result array to change background
    $i = 1;
    foreach($result as $value){
    echo "  .main__products .products-panel:nth-child($i) {
      background-image: url(../php/".$value['image'].");
      font-size: var(--font-big); }";
      $i++;
  } ?>

  
  .main__products .products-panel > * {
    transform: translateX(0%); }
  .main__products .appear {
    transform: translateY(50%); }
  .main__products .stretch {
    flex: 100%;
    opacity: 1;
    transform: translateY(-30%); }

@media (min-width: 768px) {
  body {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    grid-template-rows: repeat(5, 1fr); }
  .main {
    width: 100%;
    grid-column: 2/7;
    grid-row: 2/6;
    margin: 0% 5% 0% 0%; }
    .main__sidebar {
      left: -28%;
      top: 40%; }
      .main__sidebar .sidebar-collection {
        font-size: var(--font-small);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 100%;
        height: 30rem; }
    .main__products {
      overflow: hidden;
      font-size: var(--font-small);
      grid-column: 2/7;
      grid-row: 1/6;
      height: 100%; }
      .main__products .products-panel {
        width: 80%; } }

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 98vw; }
  .navbar__logo img {
    width: 20vw; }
  .navbar__adbar {
    background-image: url(../images/food-366875_1280.jpg);
    background-position: bottom;
    background-size: cover;
    font-size: var(--font-medium);
    display: none;
    visibility: hidden;
    border-radius: 2rem;
    width: 50%; }
  .navbar .btn {
    background-color: var(--font-color);
    color: var(--main-color);
    padding: 2vw 6vw;
    border-radius: 15rem;
    font-size: var(--font-small); }
  @media screen and (min-width: 768px) {
    .navbar {
      grid-column: 1/7;
      grid-row: 1/2;
      display: flex;
      max-width: 100vw; }
      .navbar #desktop {
        font-size: var(--font-medium);
        display: block;
        height: 10rem;
        visibility: visible;
        background-position: bottom;
        background-size: cover;
        text-align: center; }
      .navbar__logo img {
        width: 50%; } }
