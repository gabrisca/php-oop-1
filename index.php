<!-- - create un file index.php
- includete una classe “Movie”
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
BONUS:
1 Utilizzare almeno una proprietà e un metodo privato
2 Utilizzare almeno una proprietà e un metodo statico -->

<?php
// importo Movie
require_once __DIR__ . '/classes/Movie.php';

//istanza movie n°1
$movie1 = new Movie('Fargo', '1996');
$movie1->director = 'Joel Coen, Ethan Coen';
$movie1->writer = 'Joel Coen, Ethan Coen';
$movie1->cast = 'Frances McDormand, William H. Macy';
$movie1->setStoryline("Jerry works in his father-in-law's car dealership and has gotten himself in financial problems. He tries various schemes to come up with money needed for a reason that is never really explained. It has to be assumed that his huge embezzlement of money from the dealership is about to be discovered by father-in-law. When all else falls through, plans he set in motion earlier for two men to kidnap his wife for ransom to be paid by her wealthy father (who doesn't seem to have the time of day for son-in-law). From the moment of the kidnapping, things go wrong and what was supposed to be a non-violent affair turns bloody with more blood added by the minute. Jerry is upset at the bloodshed, which turns loose a pregnant sheriff from Brainerd, MN who is tenacious in attempting to solve the three murders in her jurisdiction... ");
// var_dump($movie1);

//istanza movie n°2
$movie2 = new Movie('No Country for Old Men', '2007');
$movie2->director = 'Joel Coen, Ethan Coen';
$movie2->writer = 'Joel Coen, Ethan Coen, Cormac McCarthy';
$movie2->cast = 'Tommy Lee Jones, Javier Bardem, Josh Brolin';
$movie2->setStoryline("In rural Texas, welder and hunter Llewelyn Moss (Josh Brolin) discovers the remains of several drug runners who have all killed each other in an exchange gone violently wrong. Rather than report the discovery to the police, Moss decides to simply take the two million dollars present for himself. This puts the psychopathic killer, Anton Chigurh (Javier Bardem), on his trail as he dispassionately murders nearly every rival, bystander and even employer in his pursuit of his quarry and the money. As Moss desperately attempts to keep one step ahead, the blood from this hunt begins to flow behind him with relentlessly growing intensity as Chigurh closes in. Meanwhile, the laconic Sheriff Ed Tom Bell (Tommy Lee Jones) blithely oversees the investigation even as he struggles to face the sheer enormity of the crimes he is attempting to thwart...");
// var_dump($movie2);

//istanza movie n°3
$movie3 = new Movie('The Ballad of Buster Scruggs', '2018');
$movie3->director = 'Joel Coen, Ethan Coen';
$movie3->writer = 'Joel Coen, Ethan Coen, Jack London';
$movie3->cast = 'Tim Blake Nelson, Willie Watson, Clancy Brown';
$movie3->setStoryline("Six tales of life and violence in the Old West, following a singing gunslinger, a bank robber, a traveling impresario, an elderly prospector, a wagon train, and a perverse pair of bounty hunters...");
// var_dump($movie3);

//istanza movie n°4
$movie4 = new Movie('The Big Lebowski', '1998');
$movie4->director = 'Joel Coen, Ethan Coen';
$movie4->writer = 'Joel Coen, Ethan Coen';
$movie4->cast = 'Jeff Bridges, John Goodman, Julianne Moore';
$movie4->setStoryline("When 'the dude' Lebowski is mistaken for a millionaire Lebowski, two thugs urinate on his rug to coerce him into paying a debt he knows nothing about. While attempting to gain recompense for the ruined rug from his wealthy counterpart, he accepts a one-time job with high pay-off. He enlists the help of his bowling buddy, Walter, a gun-toting Jewish-convert with anger issues. Deception leads to more trouble, and it soon seems that everyone from porn empire tycoons to nihilists want something from The Dude...");
// var_dump($movie4);

//istanza movie n°5
$movie5 = new Movie('O Brother, Where Art Thou?', '2000');
$movie5->director = 'Joel Coen, Ethan Coen';
$movie5->writer = 'Joel Coen, Ethan Coen';
$movie5->cast = 'George Clooney, John Turturro, Tim Blake Nelson';
$movie5->setStoryline("Loosely based on Homer's 'Odyssey' the movie deals with the picaresque adventures of Ulysses Everett McGill and his companions Delmar and Pete in 1930s Mississipi. Sprung from a chain gang and trying to reach Everett's home to recover the buried loot of a bank heist they are confronted by a series of strange characters--among them sirens, a cyclops, bank robber George 'Baby Face' Nelson (very annoyed by that nickname), a campaigning governor and his opponent, a KKK lynch mob, and a blind prophet who warns the trio that 'the treasure you seek shall not be the treasure you find'...");
// var_dump($movie5);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- link css -->
  <link rel="stylesheet" href="assets/style/style.css">
  <title>Document</title>
</head>

<body>
  <section id="movies">

    <h1>Movies</h1>

    <ul>
      <li>
        <h3>
          <?php echo $movie1->getInfo() ?>
        </h3>
      </li>
      <li>
        <div>
          <span>Director:</span>
          <span><?php echo $movie1->director ?></span>
        </div>
      </li>
      <li>
        <div>
          <span>Written by:</span>
          <span><?php echo $movie1->writer ?></span>
        </div>
      </li>
      <li>
        <span>Stars:</span>
        <span><?php echo $movie1->cast ?></span>
      </li>
      <li>
        <span>Storyline:</span>
        <p><?php echo $movie1->getStoryline() ?></p>
      </li>
    </ul>

    <hr>

    <ul>
      <li>
        <h3>
          <?php echo $movie2->getInfo() ?>
        </h3>
      </li>
      <li>
        <div>
          <span>Director:</span>
          <span><?php echo $movie2->director ?></span>
        </div>
      </li>
      <li>
        <div>
          <span>Written by:</span>
          <span><?php echo $movie2->writer ?></span>
        </div>
      </li>
      <li>
        <span>Stars:</span>
        <span><?php echo $movie2->cast ?></span>
      </li>
      <li>
        <span>Storyline:</span>
        <p><?php echo $movie2->getStoryline() ?></p>
      </li>
    </ul>

    <hr>

    <ul>
      <li>
        <h3>
          <?php echo $movie3->getInfo() ?>
        </h3>
      </li>
      <li>
        <div>
          <span>Director:</span>
          <span><?php echo $movie3->director ?></span>
        </div>
      </li>
      <li>
        <div>
          <span>Written by:</span>
          <span><?php echo $movie3->writer ?></span>
        </div>
      </li>
      <li>
        <span>Stars:</span>
        <span><?php echo $movie3->cast ?></span>
      </li>
      <li>
        <span>Storyline:</span>
        <p><?php echo $movie3->getStoryline() ?></p>
      </li>
    </ul>

    <hr>

    <ul>
      <li>
        <h3>
          <?php echo $movie4->getInfo() ?>
        </h3>
      </li>
      <li>
        <div>
          <span>Director:</span>
          <span><?php echo $movie4->director ?></span>
        </div>
      </li>
      <li>
        <div>
          <span>Written by:</span>
          <span><?php echo $movie4->writer ?></span>
        </div>
      </li>
      <li>
        <span>Stars:</span>
        <span><?php echo $movie4->cast ?></span>
      </li>
      <li>
        <span>Storyline:</span>
        <p><?php echo $movie4->getStoryline() ?></p>
      </li>
    </ul>

    <hr>

    <ul>
      <li>
        <h3>
          <?php echo $movie5->getInfo() ?>
        </h3>
      </li>
      <li>
        <div>
          <span>Director:</span>
          <span><?php echo $movie5->director ?></span>
        </div>
      </li>
      <li>
        <div>
          <span>Written by:</span>
          <span><?php echo $movie5->writer ?></span>
        </div>
      </li>
      <li>
        <span>Stars:</span>
        <span><?php echo $movie5->cast ?></span>
      </li>
      <li>
        <span>Storyline:</span>
        <p><?php echo $movie5->getStoryline() ?></p>
      </li>
    </ul>

  </section>

  <section id="counter">
    <h2>movies found: <?php echo Movie::$counter ?></h2>
  </section>

</body>

</html>