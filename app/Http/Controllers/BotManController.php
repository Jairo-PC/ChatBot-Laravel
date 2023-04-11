<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;


class BotManController extends Controller
{
    public function handle()
    {
        $botman=app("botman");

        $botman->hears("{message}",function($botman,$message)
        {
            $message = strtolower($message);

            if($message=="hola")
            {
                $this->askName($botman);
            }
            else
            {
                $botman->reply('Perdon no entiendo tu pregunta, aun estoy aprendiendo');
            }
        });

        $botman->listen();
    }


    public function askName($botman)
    {

        $question = Question::create("¡Hola! yo sere tu guia virtual ¿En qué puedo ayudarte?")
        ->fallback('Lo siento, no puedo responder eso')
        ->callbackId('ask_name')
        ->addButtons([
            Button::create('Información turística')->value('informacion'),
            Button::create('Reservas y reservaciones')->value('reservas'),
            Button::create('Planificación de viajes')->value('planificaciones'),
            Button::create('Asistencia de viaje')->value('viajes'),

        ]);

        $botman->ask($question, function (Answer $answer) use ($botman) {
            $selectedValue = $answer->getValue();
            switch ($selectedValue) {
                case 'informacion':
                    $this->say('Nuestros lugares a visitar son: - Plaza principal Huagaycondor, - Iglesia colonial San Pedro,
                    - Alameda San Jose, - Cementerio La ciudad de los muertos, - Gruta San Pedro, - Gruta San Pedro, - San Pedro Machay,
                    - Mirador, - Cueva Pachapashimin');
                    break;

                case 'reservas':
                    $this->say('Si no pudiste realizar tu reserva desde la web puedes hacer la reserva comunicandote con nuestro asesor de viaje JAIRO PEREZ CORDOVA: 930964501');
                    break;

                case 'planificaciones':
                    $this->say('Viajes de turno mañana:
                    (7:00 - 8:00 AM) salida temprano de la plaza principal del distrito de Ninacaca al mirador.
                    (9:00 - 10:00 AM) Visita a la iglesia colonial de Ninacaca.
                    (11:00 - 12:00 PM) Visita a la iglesia colonial de Ninacaca.');
                    $this->say('Viajes de turno tarde:
                    (12:00 - 1:00 PM) Almuerzo comida tipica.
                    (1:00 - 2:00 PM) Visita al cementerio general.
                    (2:00 - 3:00 PM) Visita a la cueva San Pedro.');
                    break;

                case 'viajes':
                    $this->say('Si deseas informacion sobre las rutas de viaje comunicate con nuestro asesor de viaje JAIRO PEREZ CORDOVA: 930964501');
                    $this->say('Si deseas informacion sobre las medidas de seguridad y salud comunicate con nuestro asesor BRAYAN PEREZ CORDOVA: 930964501');
                    break;

                default:
                    $this->say('Lo siento, no entiendo tu respuesta');
                    break;
            }

        });


}

}
