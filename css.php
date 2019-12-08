html {
  --bg: #e6f2f7;
  background-color: var(--bg);
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
  border: 1px solid #c32e04;
  counter-increment: my-awesome-counter;
  position: relative;
  display: flex;
  justify-content: center;
}
li > a {
  text-decoration: none;
  --linkcolor: #306f91;
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
  color: var(--bg);
  transition: color ease .5s;
}
li > :not(.open):hover, li > :not(.open):focus {
  color: var(--linkcolor);
  transition: color ease .5s;
}
li > .comming_soon:hover {
  color: inherit;
}