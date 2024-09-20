<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,500,900" rel="stylesheet" />

        <!-- Primary Meta Tags -->
        <title>Die Armee ist ein Trachtenverein!</title>
        <meta name="title" content="Die Armee ist ein Trachtenverein!" />
        <meta name="description" content="Die Schweizer Armee ist ein Trachtenverein und unsere Sicherheit hat etwas besseres verdient." />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url("/")}}" />
        <meta property="og:title" content="Die Armee ist ein Trachtenverein!" />
        <meta property="og:description" content="Die Schweizer Armee ist ein Trachtenverein und unsere Sicherheit hat etwas besseres verdient." />
        <meta property="og:image" content="{{ url("OG_de.jpg")}}" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="{{ url("/")}}" />
        <meta property="twitter:title" content="Die Armee ist ein Trachtenverein!" />
        <meta property="twitter:description" content="Die Schweizer Armee ist ein Trachtenverein und unsere Sicherheit hat etwas besseres verdient." />
        <meta property="twitter:image" content="{{ url("OG_de.jpg")}}" />

        <!-- Meta Tags Generated with https://metatags.io -->

        @vite("resources/css/app.scss")
    </head>
    <body>
        <div class="gsot-heroine bg-accent">
            <div class="gsot-container pt-8 text-white text-center pb-32 md:pb-60">
                <x-logo.de class="max-w-80 md:max-w-96 mx-auto mb-8"/>
                <h1 class="text-3xl md:text-6xl mb-2">Die Armee ist ein Trachtenverein!</h1>
                <p class="text-xl md:text-3xl">Unsere Sicherheit hat Besseres verdient.</p>
            </div>
        </div>
        <div class="gsot-container pt-4 text-white text-center !max-w-[1044px] -mt-32 md:-mt-60">
            <img src="/visual.jpg" alt="Thomas Süssli in Lederhosen" srcset="" class="w-full">
        </div>
        <div class="gsot-container pt-8 md:pt-12 text-xl md:text-2xl">
            <p>Am 18. und 19. September hat der Nationalrat die Armeebotschaft beraten, welche eine massive Erhöhung des Armeebudgets zur Folge hat. 4 Milliarden CHF als ursprünglich vorgesehen, bis 2030 soll das Armeebudget im Vergleich zu heute verdoppelt werden. Hierfür wird der Rotstift vor allem bei Entwicklungszusammenarbeit angesetzt. Dass mehr Geld für die Armee keine Sicherheit bringt, wissen wir. Denn der Feind steht nicht an der Grenze, das stellt sogar der Bundesrat in seinem <a href="https://www.fedlex.admin.ch/eli/fga/2022/2357/de" target="_blank">Zusatzbericht</a> fest.</p>
            <p>Unsere grösste Sicherheitsbedrohungen lauern andernorts. Die Klimakrise, die Pflegekrise, die soziale Ungleichheit, internationale Ungerechtigkeit, jederzeit mögliche Erdbeben und die Gefahr eines Atomkrieges machen die Schweiz unsicher - und die Bürgerlichen haben kein Mittel in der Hand.</p>
            <p>Der SP-Nationalrat Fabian Molina hat <a href="https://www.srf.ch/news/schweiz/leider-gibt-s-kein-popcorn-die-armee-laesst-das-bundeshaus-beben" target="_blank">in seinem Votum die Armee als «Trachtenverein» bezeichnet</a>, der keine Sicherheit garantiert.</p>

            <div class="flex flex-wrap md:flex-nowrap flex-col-reverse md:flex-row gap-8 md:gap-12 my-8 md:my-12">
                <div class="w-full md:w-1/3">
                    <img src="/molina.jpg" alt="Nationalrat Fabian Molina" class="w-full">
                </div>
                <div class="w-full md:w-2/3">
                    <p>
                        <em>«Wenn es ihnen um die Sicherheit und nicht um den Trachtenverein Armee als Institution gehen würde, dann könnten sie doch nicht ernsthaft beim Personal, das zu einem grossen Teil sicherheitsrelevant ist, kürzen wollen.»</em>
                    </p>
                    <p class="text-base">
                        <b>Fabian Molina,</b></br>Nationalrat SP
                    </p>
                </div>
            </div>

            <p>Wir stimmen ihm zu und sagen, die Schweiz braucht keinen milliardenschweren Trachtenverein! Wir wollen Sicherheit, keine Folklore.</p>

            <div class="my-8 md:my-12">
                <a href="https://gsoa.ch/mitmachen/" class="flex gap-x-4 justify-center items-center bg-accent w-fit mx-auto text-white p-4 no-underline uppercase font-black leading-none" target="_blank">
                    Jetzt Mitglied werden
                    <x-heroicon-o-chevron-right class="w-8"/>
                </a>
            </div>

            <p><em>Werde aktiv und unterstütze unsere Projekte, die wirklich für Sicherheit sorgen. Die Bürgerlichen werden dir noch danken:</em></p>

            <div class="gsot-projects flex flex-col gap-4 my-8 md:my-12">
                <div class="gsot-project bg-accent text-white p-6 flex-col flex gap-4">
                    <h3 class="text-2xl md:text-4xl">Jetzt Atomwaffenverbots-Initiative unterschreiben!</h3>
                    <p class="text-base">Mit dem Atomwaffenverbotsvertrag haben wir die Chance, einen wichtigen Schritt zur Abrüstung von Atomwaffen beizutragen. Dass der Bundesrat sich weigert, den Vertrag zu unterschreiben – obwohl er seit 2017 vom Parlament den Auftrag dazu hätte – ist eine Schande. Unterschreibe unsere Initiative, damit wir unsere Regierung zur Unterschrift bewegen!</p>
                    <a href="https://atomwaffenverbot.ch" class="flex gap-x-4 justify-center items-center bg-white w-full mx-auto text-accent p-4 no-underline uppercase font-black leading-none" target="_blank">
                        Jetzt unterschreiben
                        <x-heroicon-o-chevron-right class="w-8"/>
                    </a>
                </div>
                <div class="gsot-project bg-accent text-white p-6 flex-col flex gap-4">
                    <h3 class="text-2xl md:text-4xl">Jetzt unseren Aufruf gegen Aufrüstung unterzeichnen!</h3>
                    <p class="text-base">Im Rahmen der Armeebotschaft hat das Parlament beschlossen, das horrende Armeebudget noch stärker zu erhöhen als geplant. Dieser Beschluss wird mit Albträumen und Horrorszenarian begründet: Losgelöst von jeglicher Realität. Wir fordern vom Parlament eine nüchterne Bedrohungsanalyse.</p>
                    <a href="https://unsinnig.ch" class="flex gap-x-4 justify-center items-center bg-white w-full mx-auto text-accent p-4 no-underline uppercase font-black leading-none" target="_blank">
                        Jetzt mitmachen
                        <x-heroicon-o-chevron-right class="w-8"/>
                    </a>
                </div>
                <div class="gsot-project bg-accent text-white p-6 flex-col flex gap-4">
                    <h3 class="text-2xl md:text-4xl">Mitglied werden und den Trachtenverein abschaffen!</h3>
                    <p class="text-base">Seit über 40 Jahren engagiert sich die GSoA für den Ausbau des Schweizer Engagements in der Friedenspolitik, für einen grösseren Einsatz in der humanitären internationalen Zusammenarbeit und für die Abschaffung des Trachtenvereins Armee. Werde auch du Teil der grössten Friedensbewegung der Schweiz!</p>
                    <a href="https://gsoa.ch/mitmachen" class="flex gap-x-4 justify-center items-center bg-white w-full mx-auto text-accent p-4 no-underline uppercase font-black leading-none" target="_blank">
                        Jetzt mitglied werden
                        <x-heroicon-o-chevron-right class="w-8"/>
                    </a>
                </div>
            </div>
        </div>
    </body>

    @vite("resources/js/app.js")
</html>
