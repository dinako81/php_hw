// 3.	Sukurti komponentą rodantį tekstą h1 tage- “Zebrai ir Bebrai”, kuris gauna vieną props, kuris lygus 1 arba 2. Jeigu props lygus 1 tekstas nudažomas mėlynai, o jeigu 2 - raudonai.

function Uzd03({ color }) {
  return <h1 style={{ color }}>Zebrai ir Bebrai</h1>;
}

export default Uzd03;

// randColor(1, 2) ? "blue" : "red"
