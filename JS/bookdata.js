//This file is to hold all the product data 

//Create a class to hold the products
class Product {
    constructor(bookname, link, price, rating, stock, category, author,desc) {
      this.name = bookname;
      this.link = link;
      this.price = price;
      this.rating = rating;
      this.stock = stock;
      this.category = category;
      this.author = author;
      this.desc = desc;
    }
  }
    
      // Create the objects
      var myProductArray = [];
    myProductArray[0] = new Product("POP-UP PEEKABOO! SHARK: POP-UP SURPRISE UNDER EVERY FLAP!","./Picture/00.jpg",
      "$19.99",5,100,"0-5","DK",
      "Take your toddler on an ocean adventure in this lift-the-flap pop-up book. The lively, read-aloud rhymes encourage literacy and early learning, while the surprise pop-up scenes will delight curious preschoolers. With the help of parents and caregivers, toddlers will have fun turning the sturdy board book pages, guessing what’s hiding under each flap, and then lifting the flaps to reveal the adorable sea animals and play peekaboo!");
    myProductArray[1] = new Product("BEAR CAN'T SLEEP","./Picture/01.jpg",
      "$12.99",5,100,"0-5","Karma Wilson",
      "Winter has arrived and Bear is having a hard time falling asleep! Luckily, his friends are here to help in this cozy Classic Board Book! It’s winter and deep in the forest, Bear should be fast asleep. But when his friends come by to check on him, they realize that Bear is still awake!");
    myProductArray[2] = new Product("BLUEY: AT HOME WITH THE HEELERS","./Picture/02.jpg",
      "$16.99",5,100,"0-5","Penguin Young Readers Licenses",
      "Meet Bluey and the Heeler family in this adorable shaped board book! Based on the wildly successful animated series Bluey. Spend the day with Bluey, Bingo, and their parents in their home! Play Hairdresser with Bluey, Rug Island with Bingo, and more in this colorful shaped board book.");
    myProductArray[3] = new Product("HOW DO DINOSAURS SAY I'M MAD?","./Picture/03.jpg",
      "$17.99",5,100,"0-5","Jane Yolen",
      "The award-winning team of Yolen and Teague have created a fun, engaging book sure to help children handle anger and frustration. Everybody gets mad sometimes. Parents, educators, and children can talk about it. R-O-A-R!  When little dinosaurs get angry, they sometimes misbehave. Readers will laugh aloud and relate to all the dinosaur-sized antics, from stomping and yelling to tantrums and meltdowns.");
    myProductArray[4] = new Product("GUESS HOW MUCH I LOVE YOU: BABY BOOK","./Picture/04.jpg",
      "$15.99",5,100,"0-5","Sam Mcbratney",
      "A baby book inspired by one of the best-loved children’s books ever. Guess how much it will be treasured when baby grows up! Set against beautiful illustrations from Guess How Much I Love You, here is a truly endearing keepsake that invites parents to enter firsts, favorites, and fondest memories of their little one’s life.");
    myProductArray[5] = new Product("MEANWHILE BACK ON EARTH","./Picture/05.jpg",
      "$10.99",5,100,"0-5","Oliver Jeffers",
      "The captivating new companion to international bestsellers Here We Are and What We’ll Build. A father takes his two children on a thrilling out-of-this-world adventure into space and invites them to look back at Earth and the conflicts that have taken place since the beginning of time. This becomes a brief history of the world and a whistle-stop guide to the universe, all rolled into one – and told with Oliver Jeffers's inimitable perspective, wit and exquisite artwork. ");
    myProductArray[6] = new Product("NARWHALICORN AND JELLY","./Picture/06.jpg",
      "$12.99",5,100,"6-8","Ben Clanton",
      "In the hilarious seventh book of this blockbuster graphic novel series, Narwhal wishes to see a unicorn — and actually becomes one! When Jelly wonders what a unicorn is, Narwhal explains that they’re pretty much narwhals of the land (!) — and then gets carried away with a grand plan to see one. With the help of Star, Narwhal’s wish comes true in the wildest, weirdest way. ");
    myProductArray[7] = new Product("THE SNOW QUEEN: A STORY IN SEVEN PARTS","./Picture/07.jpg",
      "$15.99",5,100,"6-8","Neil Philip",
      "The Snow Queen is the most magical and profound of all Hans Andersen’s fairy tales. It is a quest full of mystery, humour and adventure, and its uplifting theme is the power of innocence and enduring love. When Kay’s heart turns to ice and he falls under the spell of the beautiful Snow Queen, little Gerda leaves home to search for him. On her way she encounters many dangers, but she never forgets Kay. She makes friends with flowers and birds, and with the bold robber girl who lends her a reindeer to take her to the Snow Queen’s palace. ");
    myProductArray[8] = new Product("THE GREATEST IN THE WORLD!","./Picture/08.jpg",
      "$11.99",5,100,"6-8","Ben Clanton",
      "Two spud siblings face off in a series of epic challenges in this first installment of a new and hilariously silly graphic novel chapter book series from the bestselling creator of the Narwhal and Jelly books. ");
    myProductArray[9] = new Product("THE WORLD OF EMILY WINDSNAP: SHONA FINDS HER VOICE","./Picture/09.jpg",
      "$15.99",5,100,"6-8","Liz Kessler",
      "With her best friend’s help, can mermaid Shona get up the nerve to share her singing talents at school? A new reader for younger fans based on the New York Times best-selling Emily Windsnap novels. New York Times best-selling series by Liz Kessler, this underwater adventure offers a sweet story about a confidence-bolstering friendship to new readers. ");
    myProductArray[10] = new Product("POKEMON VISUAL COMPANION","./Picture/10.jpg",
      "$16.99",5,100,"6-8","DK",
      "The world of Pokémon awaits you! Learn all about your favorite Pokémon in this fact-packed updated guide to the animated series. Explore every region from Kanto to Galar, and discover the people and Pokémon who live there. Trace Ash’s journey and get to know his friends and travel companions. See epic battles and meet Legendary and Mythical Pokémon. ");
    myProductArray[11] = new Product("PUSS IN BOOTS: THE LAST WISH PURR-FECT ACTIVITY BOOK!","./Picture/11.jpg",
      "$18.99",5,100,"6-8","Terrance Crawford",
      "Puss in Boots 2 hits theaters on December 21, 2022! Join Puss, Kitty Softpaws, and the rest of the crew in this all-new adventure activity book based on the hit feature film. This activity book is jam-packed with tons of fun prompts, mazes, puzzles, and more, all from the Puss in Boots films! ");
      myProductArray[12] = new Product("PUSS IN BOOTS: THE LAST WISH PURR-FECT ACTIVITY BOOK!","./Picture/12.jpg",
      "$12.99",5,100,"6-8","Terrance Crawford",
      "Puss in Boots 2 hits theaters on December 21, 2022! Join Puss, Kitty Softpaws, and the rest of the crew in this all-new adventure activity book based on the hit feature film. This activity book is jam-packed with tons of fun prompts, mazes, puzzles, and more, all from the Puss in Boots films! ");


      // set up the book data set
// const books0 = [
//     {"imgsrc":"Picture/00.jpg","title":"About",
//     "about":"Take your toddler on an ocean adventure in this lift-the-flap pop-up book. Toddlers will have fun lifting the flaps to reveal the adorable sea animals and play peekaboo!",
//     "name":"POP-UP PEEKABOO!","author":"DK","price":"$19.99"},
//     {"imgsrc":"Picture/01.jpg","title":"About",
//     "about":"Winter has arrived and Bear is having a hard time falling asleep! Luckily, his friends are here to help in this cozy Classic Board Book! It’s winter and deep in the forest, Bear should be fast asleep.",
//     "name":"BEAR CAN'T SLEEP","author":"Karma Wilson","price":"$12.99"},
//     {"imgsrc":"Picture/02.jpg","title":"About",
//     "about":"Meet Bluey and the Heeler family in this adorable shaped board book! Based on the wildly successful animated series Bluey.",
//     "name":"BLUEY: AT HOME WITH THE HEELERS","author":"Penguin Young Readers Licenses","price":"$16.99"},
//     {"imgsrc":"Picture/03.jpg","title":"About",
//     "about":"The award-winning team of Yolen and Teague have created a fun, engaging book sure to help children handle anger and frustration.",
//     "name":"HOW DO DINOSAURS SAY I'M MAD?","author":"Jane Yolen","price":"$17.99"},
//     {"imgsrc":"Picture/04.jpg","title":"About",
//     "about":"A baby book inspired by one of the best-loved children’s books ever. Guess how much it will be treasured when baby grows up! Set against beautiful illustrations from Guess How Much I Love You.",
//     "name":"GUESS HOW MUCH I LOVE YOU: BABY BOOK","author":"Sam Mcbratney","price":"$17.99"},
//     {"imgsrc":"Picture/05.jpg","title":"About",
//     "about":"The captivating new companion to international bestsellers Here We Are and What We’ll Build.",
//     "name":"MEANWHILE BACK ON EARTH","author":"Oliver Jeffers","price":"$17.99"}]

//use querySelectorAll to get all the elements match the selector
// const box = document.querySelectorAll(".flip-box-one");
// const img = document.querySelectorAll(".bookimg");
// const title = document.querySelectorAll(".title");
// const about = document.querySelectorAll(".about");
// const name = document.querySelectorAll(".name");
// const author = document.querySelectorAll(".author");
// const price = document.querySelectorAll(".price");