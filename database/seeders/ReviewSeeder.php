<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $review1 = new Review();
        $review1->idReview = 1;
        $review1->idPost = 1;
        $review1->nombreJuego = "Advance Wars 1+2";
        $review1->resumenReview = "Un clásico de la estrategia por turnos revitalizado para una nueva generación.";
        $review1->contenidoReview = "Advance Wars 1+2 es un regreso triunfal de los icónicos juegos de estrategia por turnos originalmente lanzados en Game Boy Advance. La colección incluye Advance Wars y Advance Wars 2: Black Hole Rising, ambos remasterizados con gráficos actualizados y nuevas características. Los jugadores asumen el rol de un comandante que debe guiar a sus tropas en el campo de batalla, utilizando tácticas inteligentes y una planificación cuidadosa para superar a sus enemigos. Con una historia envolvente y una jugabilidad adictiva, estos juegos son un testimonio del género de estrategia. La inclusión de modo multijugador y nuevas misiones proporcionan horas de entretenimiento para veteranos y nuevos jugadores por igual.";
        $review1->puntajeJuego = 9;
        $review1->generoJuego = "Estrategia";
        $review1->imgCard = "1imgCard.jpg";
        $review1->imgPortada = "1imgPortada.jpg";
        $review1->save();
        //----------------------------------------------------------------------------

        $review2 = new Review();
        $review2->idReview = 2;
        $review2->idPost = 2;
        $review2->nombreJuego = "Death Stranding";
        $review2->resumenReview = "Una experiencia única de Hideo Kojima que redefine el género de acción y aventura.";
        $review2->contenidoReview = "Death Stranding, el innovador juego de Hideo Kojima, es una experiencia única que mezcla la narrativa profunda con una jugabilidad distinta. Ambientado en un mundo post-apocalíptico, los jugadores toman el control de Sam Porter Bridges, un mensajero encargado de reconectar a la humanidad. La mecánica del juego se centra en la entrega de paquetes y la exploración de un vasto y desolado paisaje, mientras se enfrenta a amenazas tanto físicas como sobrenaturales. El juego destaca por su atmósfera opresiva, su diseño de sonido impresionante y una historia compleja que explora temas de conexión y aislamiento. Aunque no es para todos debido a su ritmo deliberadamente pausado, aquellos que se sumerjan en su mundo encontrarán una experiencia profundamente gratificante.";
        $review2->puntajeJuego = 8.5;
        $review2->generoJuego = "Acción";
        $review2->imgCard = "2imgCard.jpg";
        $review2->imgPortada = "2imgPortada.jpg";
        $review2->save();
        //----------------------------------------------------------------------------

        $review3 = new Review();
        $review3->idReview = 3;
        $review3->idPost = 3;
        $review3->nombreJuego = "GTA 5";
        $review3->resumenReview = "Una obra maestra del mundo abierto que sigue siendo relevante años después de su lanzamiento.";
        $review3->contenidoReview = "Grand Theft Auto V es una obra maestra de Rockstar Games que ha dejado una marca indeleble en el género de los juegos de mundo abierto. La historia sigue a tres protagonistas: Michael, un ladrón de bancos retirado; Franklin, un pandillero en busca de oportunidades; y Trevor, un maniaco impredecible. La narrativa se entrelaza de manera brillante, permitiendo a los jugadores cambiar entre los personajes en cualquier momento. El mundo de Los Santos está meticulosamente detallado, ofreciendo una experiencia inmersiva y realista. Con una jugabilidad variada que incluye misiones de robo, carreras, actividades secundarias y un robusto modo multijugador, GTA V proporciona innumerables horas de entretenimiento. Su capacidad para mantenerse relevante y fresco años después de su lanzamiento es un testimonio de su calidad.";
        $review3->puntajeJuego = 10;
        $review3->generoJuego = "Aventura";
        $review3->imgCard = "3imgCard.jpg";
        $review3->imgPortada = "3imgPortada.jpg";
        $review3->save();
        //----------------------------------------------------------------------------

        $review4 = new Review();
        $review4->idReview = 4;
        $review4->idPost = 4;
        $review4->nombreJuego = "Mortal Kombat 1";
        $review4->resumenReview = "Una impresionante entrada en la saga de lucha con mecánicas refinadas y gráficos impactantes.";
        $review4->contenidoReview = "Mortal Kombat 1 reinventa el icónico juego de lucha con gráficos modernos y una jugabilidad refinada. Esta entrega introduce nuevas mecánicas de combate que mejoran la profundidad estratégica, haciendo cada pelea más intensa y técnica. Los personajes clásicos regresan con nuevos movimientos y fatalities, manteniendo el espíritu brutal que define la serie. El modo historia ofrece una narrativa cinematográfica que explora los orígenes de los luchadores y sus conflictos. Además, los modos de juego adicionales como torres y desafíos proporcionan variedad y rejugabilidad. Aunque algunos aspectos podrían mejorarse, Mortal Kombat 1 se destaca como una entrada sólida en la saga.";
        $review4->puntajeJuego = 8;
        $review4->generoJuego = "Lucha";
        $review4->imgCard = "4imgCard.jpg";
        $review4->imgPortada = "4imgPortada.jpg";
        $review4->save();
        //----------------------------------------------------------------------------

        $review5 = new Review();
        $review5->idReview = 5;
        $review5->idPost = 5;
        $review5->nombreJuego = "Octopath Traveler 2";
        $review5->resumenReview = "Una secuela sólida que mejora en todos los aspectos del original.";
        $review5->contenidoReview = "Octopath Traveler 2 mejora todos los aspectos del primer juego, ofreciendo una experiencia RPG aún más rica y envolvente. Con ocho nuevos personajes, cada uno con su propia historia y habilidades únicas, los jugadores se embarcan en un viaje épico a través de un mundo bellamente diseñado con un estilo artístico HD-2D que combina gráficos retro con efectos modernos. La jugabilidad se centra en la exploración y el combate por turnos, donde la estrategia y la planificación son clave para la victoria. La narrativa entrelazada permite una profunda inmersión en la vida de los personajes, y las opciones de personalización ofrecen una experiencia de juego variada. Con una banda sonora evocadora y un diseño de niveles meticuloso, Octopath Traveller 2 es un JRPG imprescindible para los fans del género.";
        $review5->puntajeJuego = 8.5;
        $review5->generoJuego = "RPG";
        $review5->imgCard = "5imgCard.jpg";
        $review5->imgPortada = "5imgPortada.jpg";
        $review5->save();
        //----------------------------------------------------------------------------

        $review6 = new Review();
        $review6->idReview = 6;
        $review6->idPost = 6;
        $review6->nombreJuego = "Sand Land";
        $review6->resumenReview = "Una aventura interesante en un mundo desértico con mucho por descubrir.";
        $review6->contenidoReview = "Sand Land es una aventura única que lleva a los jugadores a un vasto desierto lleno de misterios y desafíos. Inspirado en el manga de Akira Toriyama, el juego combina elementos de RPG y exploración en un entorno post-apocalíptico. Los jugadores asumen el papel de Beelzebub, un príncipe demonio, en su búsqueda de agua en un mundo árido. La narrativa se desarrolla a través de misiones y encuentros con diversos personajes, cada uno aportando al rico trasfondo del juego. Con un diseño artístico distintivo y una jugabilidad que fomenta la exploración y la estrategia, Sand Land ofrece una experiencia refrescante aunque no exenta de imperfecciones. Algunos problemas técnicos y de ritmo pueden afectar la inmersión, pero en general, es una aventura digna de ser explorada.";
        $review6->puntajeJuego = 7.5;
        $review6->generoJuego = "Aventura";
        $review6->imgCard = "6imgCard.jpg";
        $review6->imgPortada = "6imgPortada.jpg";
        $review6->save();
        //----------------------------------------------------------------------------

        $review7 = new Review();
        $review7->idReview = 7;
        $review7->idPost = 7;
        $review7->nombreJuego = "Sekiro Shadows Die Twice";
        $review7->resumenReview = "Un desafiante juego de acción y aventura con un combate profundo y gratificante.";
        $review7->contenidoReview = "Sekiro: Shadows Die Twice es una obra maestra de FromSoftware que lleva a los jugadores a un Japón ficticio lleno de peligros y maravillas. A diferencia de los juegos Soulsborne, Sekiro se enfoca en la agilidad y la precisión en el combate, donde el sigilo y la estrategia son esenciales. Los jugadores toman el control de Wolf, un guerrero shinobi en una misión de venganza y redención. La mecánica de combate, centrada en el bloqueo y la postura, ofrece un desafío único que recompensa la paciencia y la habilidad. El diseño de niveles es intrincado, con áreas interconectadas llenas de secretos y enemigos formidables. La narrativa, aunque menos explícita que en otros títulos de FromSoftware, es rica en simbolismo y detalles. Con una dificultad elevada y un combate gratificante, Sekiro es una experiencia ineludible para los fans de los juegos de acción.";
        $review7->puntajeJuego = 9.5;
        $review7->generoJuego = "Aventura";
        $review7->imgCard = "7imgCard.jpg";
        $review7->imgPortada = "7imgPortada.jpg";
        $review7->save();
        //----------------------------------------------------------------------------

        $review8 = new Review();
        $review8->idReview = 8;
        $review8->idPost = 8;
        $review8->nombreJuego = "Super Mario Wonder";
        $review8->resumenReview = "Un regreso a las raíces de Mario con creatividad y diversión en cada nivel.";
        $review8->contenidoReview = "Super Mario Wonder es un brillante regreso a las raíces de los juegos de plataformas de Mario, ofreciendo una experiencia que combina la nostalgia con innovaciones frescas. Cada nivel está lleno de creatividad y sorpresas, con nuevos power-ups y mecánicas que mantienen la jugabilidad siempre interesante. El diseño de niveles es ejemplar, proporcionando un equilibrio perfecto entre desafío y accesibilidad. Los gráficos coloridos y la banda sonora alegre añaden una capa adicional de encanto. Además, el modo multijugador local fomenta la cooperación y la competencia amistosa. Super Mario Wonder demuestra que, incluso después de décadas, la fórmula de Mario sigue siendo tan mágica como siempre.";
        $review8->puntajeJuego = 9;
        $review8->generoJuego = "Aventura";
        $review8->imgCard = "8imgCard.jpg";
        $review8->imgPortada = "8imgPortada.jpg";
        $review8->save();
        //----------------------------------------------------------------------------

        $review9 = new Review();
        $review9->idReview = 9;
        $review9->idPost = 9;
        $review9->nombreJuego = "The Last of Us Parte 1";
        $review9->resumenReview = "Una narrativa poderosa combinada con una jugabilidad intensa y emocional.";
        $review9->contenidoReview = "The Last of Us Parte 1 es una obra maestra narrativa que combina una jugabilidad intensa con una historia profundamente emocional. Ambientado en un mundo devastado por una pandemia, los jugadores siguen la historia de Joel y Ellie mientras navegan por los peligros tanto humanos como infectados. La relación entre los personajes se desarrolla de manera magistral, ofreciendo momentos de ternura, dolor y esperanza. La jugabilidad mezcla elementos de sigilo, combate y exploración, creando una experiencia variada y tensa. Los gráficos y el diseño de sonido son de primer nivel, inmersiendo al jugador en un mundo post-apocalíptico realista. Con una narrativa que desafía las expectativas y una ejecución impecable, The Last of Us Parte 1 es una experiencia obligatoria para cualquier aficionado a los videojuegos.";
        $review9->puntajeJuego = 10;
        $review9->generoJuego = "Acción";
        $review9->imgCard = "9imgCard.jpg";
        $review9->imgPortada = "9imgPortada.jpg";
        $review9->save();
        //----------------------------------------------------------------------------

        $review10 = new Review();
        $review10->idReview = 10;
        $review10->idPost = 10;
        $review10->nombreJuego = "Zelda Tears of The Kingdom";
        $review10->resumenReview = "Una impresionante continuación que expande el mundo y la jugabilidad del original.";
        $review10->contenidoReview = "Zelda: Tears of The Kingdom es una secuela impresionante que expande y mejora todo lo que hizo grandioso a Breath of the Wild. El vasto mundo abierto de Hyrule está lleno de vida, misterio y aventuras, ofreciendo innumerables posibilidades para la exploración y la experimentación. La historia sigue a Link y Zelda mientras enfrentan una nueva amenaza que pone en peligro el reino. La jugabilidad se enriquece con nuevas mecánicas y herramientas que permiten a los jugadores interactuar con el entorno de maneras creativas. Los santuarios y las mazmorras están diseñados con ingenio, desafiando tanto la mente como las habilidades del jugador. La banda sonora evocadora y los gráficos deslumbrantes completan una experiencia épica. Zelda: Tears of The Kingdom no solo cumple con las expectativas, sino que las supera, estableciendo un nuevo estándar para los juegos de aventura.";
        $review10->puntajeJuego = 10;
        $review10->generoJuego = "Mundo Abierto";
        $review10->imgCard = "10imgCard.jpg";
        $review10->imgPortada = "10imgPortada.jpg";
        $review10->save();
        //----------------------------------------------------------------------------
    }
}
