html {
  --bgcolor: #e6f2f7;
  --linkcolor: #306f91;
  --bordercolor: #c32e04;
  background-color: var(--bgcolor);
}
ol {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(20rem, 1fr));
  max-width: 120rem;
  margin: 1rem auto;
  padding: 0 1rem;  
  counter-reset: my-awesome-counter;
  list-style: none;  
}
@media (min-width: 80rem) { /* 4x6 */ 
  ol {
    grid-template-columns: repeat(4, 1fr);
  }
}
@media (min-width: 120rem) { /* 6x4 */ 
  ol {
    grid-template-columns: repeat(6, 1fr);
  } 
}
li {
  height: 9rem;
  padding: 1rem;
  border: thin solid var(--bordercolor);
  counter-increment: my-awesome-counter;
  position: relative;
  display: flex;
  justify-content: center;
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
}
li > a > :first-child {
  margin-top: 0;
}
li > a > :last-child {
  margin-bottom: 0;
}
li > .donate, li > .comming_soon {
  margin: 0;
  padding: 20% 0;
  text-align: center;
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