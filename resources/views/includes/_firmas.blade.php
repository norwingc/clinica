@if(\Auth::user()->nickname == 'pavon')
    <footer style="margin-top: 1em">
        <p sytyle="margin: 0">
            <b>Dr. Néstor Javier Pavón Gómez</b> <br>
            Médico Gineco Obstetra <br>
            Sub Especialista en Medicina Materno Fetal - <b>INPER México</b> <br>
            Neurosonografia - Neurología Fetal / Ecocardiografia Fetal <br>
            Código MINSA 15047 / <b>"Fetal Medicine Foundation"</b> FMF ID 104192
        </p>
    </footer>
@endif

@if(\Auth::user()->nickname == 'bravo')
    <footer style="margin-top: 1em">
        <p sytyle="margin: 0">
            <b>Dra. Sugey del Carmen Bravo Cabrera</b> <br>
            Médico y Cirujana <br>
            Especialista en Ginecologia y Obstetrica <br>
            Colposcopia y Crioterapia <br>
            Código MINSA 13311
        </p>
    </footer>
@endif
