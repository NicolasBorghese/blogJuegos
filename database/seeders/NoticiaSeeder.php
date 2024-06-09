<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$noticia1 = new Noticia();
        //$noticia1->idNoticia = 1;
        //$noticia1->idPost = 11;
        //$noticia1->tituloNoticia = "";
        //$noticia1->resumenNoticia = "";
        //$noticia1->contenidoNoticia = "";
        //$noticia1->imgCard = "";
        //$noticia1->imgPortada = "";
        //$noticia1->save();

        $noticias = [
            [
                'idNoticia' => 1,
                'idPost' => 11,
                'tituloNoticia' => 'Lanzamiento del nuevo juego "Adventure Quest"',
                'resumenNoticia' => 'El esperado juego "Adventure Quest" ha sido lanzado.',
                'contenidoNoticia' => 'Después de años de desarrollo y anticipación, el juego "Adventure Quest" finalmente ha sido lanzado. Con gráficos impresionantes y una jugabilidad innovadora, este juego promete ser uno de los favoritos entre los fanáticos de los videojuegos. Los jugadores podrán explorar vastos mundos, enfrentar desafiantes enemigos y descubrir secretos ocultos a lo largo de su viaje. El lanzamiento ha sido recibido con entusiasmo tanto por los críticos como por los jugadores, quienes elogian su atención al detalle y la profundidad de su historia.',
                'imgCard' => '11imgCard.jpg',
                'imgPortada' => '11imgPortada.jpg',
            ],
            [
                'idNoticia' => 2,
                'idPost' => 12,
                'tituloNoticia' => 'Actualización de "Battle Arena" trae nuevas características',
                'resumenNoticia' => 'La última actualización de "Battle Arena" introduce nuevas características y mejoras.',
                'contenidoNoticia' => 'La última actualización del popular juego "Battle Arena" ha sido lanzada, trayendo consigo una serie de nuevas características y mejoras. Los jugadores ahora pueden disfrutar de nuevos modos de juego, mapas adicionales y un sistema de progresión mejorado. Además, la actualización incluye varias correcciones de errores y ajustes de equilibrio que han sido muy solicitados por la comunidad. Los desarrolladores han prometido seguir escuchando los comentarios de los jugadores para seguir mejorando el juego en futuras actualizaciones.',
                'imgCard' => '12imgCard.jpg',
                'imgPortada' => '12imgPortada.jpg',
            ],
            [
                'idNoticia' => 3,
                'idPost' => 13,
                'tituloNoticia' => 'Evento especial de "Mystic Legends" celebra su aniversario',
                'resumenNoticia' => 'El juego "Mystic Legends" celebra su aniversario con un evento especial.',
                'contenidoNoticia' => 'Para celebrar su aniversario, el juego "Mystic Legends" ha lanzado un evento especial que incluye recompensas exclusivas y desafíos únicos. Durante el evento, los jugadores pueden participar en misiones temporales que ofrecen valiosas recompensas, como nuevos personajes, armas y atuendos. Además, habrá descuentos en compras dentro del juego y la oportunidad de ganar premios adicionales a través de sorteos. Los desarrolladores esperan que este evento atraiga tanto a nuevos jugadores como a los veteranos, fomentando una mayor participación en la comunidad.',
                'imgCard' => '13imgCard.jpg',
                'imgPortada' => '13imgPortada.jpg',
            ],
            [
                'idNoticia' => 4,
                'idPost' => 14,
                'tituloNoticia' => 'Previa de "Space Odyssey": Lo que sabemos hasta ahora',
                'resumenNoticia' => 'Una mirada anticipada al próximo juego "Space Odyssey".',
                'contenidoNoticia' => 'El próximo lanzamiento de "Space Odyssey" ha generado mucha expectación entre los aficionados a los videojuegos. Este juego de exploración espacial promete ofrecer una experiencia inmersiva con un vasto universo para explorar, misiones intrigantes y una narrativa profunda. Los desarrolladores han compartido algunos detalles sobre el juego, incluyendo la posibilidad de pilotar naves espaciales personalizables, interactuar con diferentes especies alienígenas y tomar decisiones que afectarán el curso de la historia. Aunque la fecha de lanzamiento aún no ha sido anunciada, los fans están ansiosos por más noticias.',
                'imgCard' => '14imgCard.jpg',
                'imgPortada' => '14imgPortada.jpg',
            ],
            [
                'idNoticia' => 5,
                'idPost' => 15,
                'tituloNoticia' => 'Revisión de "Dragon Slayer": ¿Vale la pena el hype?',
                'resumenNoticia' => 'Una revisión detallada del juego "Dragon Slayer".',
                'contenidoNoticia' => 'El juego "Dragon Slayer" ha sido uno de los lanzamientos más esperados del año, pero ¿cumple con las expectativas? En esta revisión, analizamos todos los aspectos del juego, desde sus gráficos y jugabilidad hasta su historia y rejugabilidad. Los gráficos son impresionantes, con un nivel de detalle que realmente da vida al mundo de fantasía. La jugabilidad es fluida y desafiante, manteniendo a los jugadores enganchados durante horas. Sin embargo, hay algunos puntos débiles, como ciertos errores menores y una curva de dificultad que puede ser intimidante para los nuevos jugadores. En general, "Dragon Slayer" es un juego que vale la pena probar, especialmente para los fans del género de fantasía.',
                'imgCard' => '15imgCard.jpg',
                'imgPortada' => '15imgPortada.jpg',
            ],
            [
                'idNoticia' => 6,
                'idPost' => 16,
                'tituloNoticia' => 'El esperado DLC de "Fantasy World" ya está disponible',
                'resumenNoticia' => 'El nuevo DLC de "Fantasy World" añade horas de contenido y nuevas aventuras.',
                'contenidoNoticia' => 'Los fans de "Fantasy World" están de enhorabuena, ya que el esperado DLC ha sido lanzado oficialmente. Este nuevo contenido descargable añade varias horas de juego, incluyendo nuevas misiones, personajes y áreas para explorar. Los desarrolladores han trabajado duro para asegurarse de que el DLC mantenga el mismo nivel de calidad que el juego base, ofreciendo una experiencia enriquecida y emocionante para los jugadores. Además, el DLC incluye mejoras en la jugabilidad y correcciones de errores que habían sido reportados por la comunidad.',
                'imgCard' => '16imgCard.jpg',
                'imgPortada' => '16imgPortada.jpg',
            ],
            [
                'idNoticia' => 7,
                'idPost' => 17,
                'tituloNoticia' => 'Nueva actualización de "Racing Rivals" introduce coches eléctricos',
                'resumenNoticia' => 'La última actualización de "Racing Rivals" añade coches eléctricos al juego.',
                'contenidoNoticia' => 'La comunidad de "Racing Rivals" ha recibido con entusiasmo la última actualización del juego, que introduce una nueva categoría de coches eléctricos. Esta actualización no solo añade nuevos vehículos con un diseño futurista y un rendimiento excepcional, sino que también incluye nuevos circuitos diseñados específicamente para estos coches. Los desarrolladores han trabajado en estrecha colaboración con expertos en automovilismo para asegurar que la física de los coches eléctricos sea lo más realista posible, ofreciendo una experiencia de conducción única y emocionante.',
                'imgCard' => '17imgCard.jpg',
                'imgPortada' => '17imgPortada.jpg',
            ],
            [
                'idNoticia' => 8,
                'idPost' => 18,
                'tituloNoticia' => 'La beta cerrada de "Zombie Apocalypse" comienza esta semana',
                'resumenNoticia' => 'Los jugadores podrán probar "Zombie Apocalypse" antes de su lanzamiento oficial.',
                'contenidoNoticia' => 'La beta cerrada de "Zombie Apocalypse" comenzará esta semana, permitiendo a los jugadores probar el juego antes de su lanzamiento oficial. Este título de supervivencia en un mundo post-apocalíptico ha generado mucho interés debido a su enfoque en la supervivencia realista y la interacción con otros jugadores. Durante la beta, los jugadores podrán explorar un mundo devastado por zombies, recolectar recursos, construir refugios y formar alianzas. Los desarrolladores esperan recibir valiosos comentarios de los jugadores para pulir y mejorar el juego antes de su lanzamiento.',
                'imgCard' => '18imgCard.jpg',
                'imgPortada' => '18imgPortada.jpg',
            ],
            [
                'idNoticia' => 9,
                'idPost' => 19,
                'tituloNoticia' => 'El remake de "Ancient Quest" sorprende a los jugadores',
                'resumenNoticia' => 'El remake de "Ancient Quest" ha sido lanzado con grandes mejoras gráficas y de jugabilidad.',
                'contenidoNoticia' => 'El remake de "Ancient Quest", un clásico juego de aventuras, ha sido lanzado con una acogida positiva por parte de los jugadores. Esta nueva versión del juego cuenta con gráficos mejorados, una jugabilidad más fluida y nuevas características que no estaban presentes en el original. Los jugadores podrán revivir la épica historia de "Ancient Quest" con una presentación moderna y mejoras en la calidad de vida, como controles más intuitivos y opciones de accesibilidad. El remake ha logrado mantener la esencia del juego original mientras introduce mejoras significativas que atraerán tanto a los nuevos jugadores como a los veteranos.',
                'imgCard' => '19imgCard.jpg',
                'imgPortada' => '19imgPortada.jpg',
            ],
            [
                'idNoticia' => 10,
                'idPost' => 20,
                'tituloNoticia' => 'Anunciado el torneo mundial de "Battle Heroes"',
                'resumenNoticia' => 'El torneo mundial de "Battle Heroes" se llevará a cabo el próximo mes con grandes premios.',
                'contenidoNoticia' => 'El próximo torneo mundial de "Battle Heroes" ha sido anunciado, y se llevará a cabo el próximo mes con la participación de equipos de todo el mundo. Este evento es una oportunidad para que los mejores jugadores y equipos de "Battle Heroes" compitan por grandes premios y el prestigio de ser coronados como campeones mundiales. El torneo incluirá varias fases, comenzando con rondas clasificatorias y culminando en una gran final que será transmitida en vivo. Los organizadores del torneo han prometido una producción de alta calidad, con comentaristas profesionales y análisis detallados de cada partida.',
                'imgCard' => '20imgCard.jpg',
                'imgPortada' => '20imgPortada.jpg',
            ],
        ];

        foreach ($noticias as $noticia) {
            $nuevaNoticia = new Noticia();
            $nuevaNoticia->idNoticia = $noticia['idNoticia'];
            $nuevaNoticia->idPost = $noticia['idPost'];
            $nuevaNoticia->tituloNoticia = $noticia['tituloNoticia'];
            $nuevaNoticia->resumenNoticia = $noticia['resumenNoticia'];
            $nuevaNoticia->contenidoNoticia = $noticia['contenidoNoticia'];
            $nuevaNoticia->imgCard = $noticia['imgCard'];
            $nuevaNoticia->imgPortada = $noticia['imgPortada'];
            $nuevaNoticia->save();
        }
    }
}
