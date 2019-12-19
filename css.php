<?php
$order = range(1, 24);
shuffle($order); 
$orderstring = implode(',',$order); 

for ($k = 0; $k < 24; $k++) : ?>
  li:nth-of-type(<?=$k+1?>) {
    order: <?=$order[$k]?>;
} <?php
endfor; ?>

html {
  --bgcolor: #e6f2f7;
  --linkcolor: #306f91;
  --bordercolor: #c32e04;
  background-color: var(--bgcolor);
}
h1 {
  font-size: 3rem;
  margin: 1rem auto;
  padding: 5rem 0 2rem;
  text-align: center;
}
h1 a {
  text-decoration: none;
  color: inherit;
  padding: 6rem 0 2rem calc(126px + 1rem);
  background-image: url(Selfhtml-nico.png);
  background-position: left center;
  background-repeat: no-repeat;
}
span.self {
  text-transform: uppercase;
}
ol {
  display: grid;
  grid-gap: 1rem;
  max-width: 90rem;
  margin: 1rem auto;
  padding: 0;
  counter-reset: my-awesome-counter;
  list-style: none;  
}
@media (min-width: 30rem) { 
  ol {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(12, 1fr);
  }
}
@media (min-width: 50rem) {
  ol {
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(6, 1fr);
  }
}
li {
  padding: 0;
  border: thin solid var(--bordercolor);
  counter-increment: my-awesome-counter;
  position: relative;
  display: flex;
}
li::after {
  --size: 2rem;
  content: counter(my-awesome-counter);
  position: absolute;
  color: var(--bgcolor);
  font-size: calc(var(--size) * .75);
  font-weight: bold;
  right: calc(var(--size) * .25);
  top: calc(var(--size) * .25);
  line-height: var(--size);
  width: var(--size);
  height: var(--size);
  padding: calc(var(--size) * .2);
  transform: rotate(-10deg);
  background-color: var(--bordercolor);
  border-radius: 50%;
  text-align: center;
  box-shadow: calc(var(--size) * .05) calc(var(--size) * .05) 0 #999;
}
li > a {
  text-decoration: none;
  color: var(--linkcolor);
  padding: 1rem;
  flex: 1 1 auto;
}
li > a > :first-child {
  margin-top: 0;
}
li > a > :last-child {
  margin-bottom: 0;
}
li > .donate, li > .comming_soon {
  margin: 0;
  align-self: center;
  text-align: center;
}
li > .donate::after, li > .comming_soon::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
li > :not(.open) {
  color: var(--bgcolor);
  transition: color ease .5s;
}
li > :not(.open):hover, li > :not(.open):focus {
  color: var(--linkcolor);
  transition: color ease .5s;
}
li > .comming_soon:hover {
  color: inherit;
}