@extends('layouts.Registro_Empresas')

@section('title','Encuesta de satisfacción')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Ingreso_encuesta_de_satisfaccion.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/Validaciones_encuesta_satisfaccion.js') }}"> </script>
@endsection

@section('Container_Registro_Empresas')
    <div class="main--header">
        <div class="main--header--flecha-1">
            <img src="../assets/flechas/FLECHA_INICIO_GRIS.png" alt="" />
            <div class="main--header--flecha--text-1"><p>Universidad Objetivo</p></div>
        </div>
        <div class="main--header--flecha-2">
            <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
            <div class="main--header--flecha--text-2"><p>Crear Cuenta de Empresa</p></div>
        </div>
        <div class="main--header--flecha-2">
            <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
            <div class="main--header--flecha--text-3"><p>Datos de la Empresa</p></div>
        </div>
        <div class="main--header--flecha-2">
            <img src="../assets/flechas/FLECHA_FINAL.png" alt="" />
            <div class="main--header--flecha--text-4"><p>Encuesta de Satisfacción</p></div>
        </div>
    </div>
    <form action="{{ route('Empresa.stored_encuesta')}}" method="POST">
        @csrf
        <div class="main--container--form">
            <div class="main--container-quiz">
                <div class="container-question-1">
                    <div class="text-question">
                        <p>
                            1.- ¿Cuál es el grado de conocimientos que el 
                            egresado muestra o mostro en sus funciones, al 
                            momento de ingresar a su empresa?
                        </p>
                    </div>
                    <div class="container-question-1-radioB">
                        <div class="radio-option">
                            <input type="radio" id="calification-radio-1" name="pregunta_1" value="Excelente" />
                            <label for="calification-radio-1">Excelente</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="calification-radio-2" name="pregunta_1" value="Sobresaliente" />
                            <label for="calification-radio-2">Sobresaliente</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="calification-radio-3" name="pregunta_1" value="Aceptable" />
                            <label for="calification-radio-3">Aceptable</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="calification-radio-4" name="pregunta_1" value="Insuficiente" />
                            <label for="calification-radio-4">Insuficiente</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="calification-radio-5" name="pregunta_1" value="Deficiente" />
                            <label for="calification-radio-5">Deficiente</label>
                        </div>
                    </div>
                </div>
                <div class="container--question-2">
                    <div class="text-question">
                        <p>
                            2.- ¿El egresado carece o careció de algúno(s) conocimiento(s) 
                            básico(s) para realizar sus actividades, al momento de egresar?
                        </p>
                    </div>
                    <div class="container--options-question">
                        <div class="container-question-radioB">
                            <div class="more-options">
                                <div class="radio-option">
                                    <input type="radio" id="pregunta_2-radio-1" name="pregunta_2" value="Si" onchange="validacion_inputs(this.value, 'pregunta_2-input-a','pregunta_2-input-b','pregunta_2-input-c','pregunta_2-input-d')"/>
                                    <label for="pregunta_2-radio-1">Si</label>
                                </div>
                                <p>¿cuáles?</p>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="pregunta_2-radio-2" name="pregunta_2" value="No" onchange="validacion_inputs(this.value, 'pregunta_2-input-a','pregunta_2-input-b','pregunta_2-input-c','pregunta_2-input-d')"/>
                                <label for="pregunta_2-radio-2">No</label>
                            </div>
                        </div>
                        <div class="container-question-input_s">
                            <div class="container-more-options">
                                <div class="container-input">
                                    <div class="more-options-2"><p>a)</p></div>
                                    <input type="text" id="pregunta_2-input-a" name="pregunta_2_input[]" placeholder="...." readonly="true">
                                </div>
                                <div class="container-input">
                                    <div class="more-options-2"><p>c)</p></div>
                                    <input type="text" id="pregunta_2-input-c" name="pregunta_2_input[]" placeholder="...." readonly="true">
                                </div>
                            </div>
                            <div class="container-more-options">
                                <div class="container-input">
                                    <div class="more-options-2"><p>b)</p></div>
                                    <input type="text" id="pregunta_2-input-b" name="pregunta_2_input[]" placeholder="...." readonly="true">
                                </div>
                                <div class="container-input">
                                    <div class="more-options-2"><p>d)</p></div>
                                    <input type="text" id="pregunta_2-input-d" name="pregunta_2_input[]" placeholder="...." readonly="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container--question-3">
                    <div class="text-question">
                        <p>
                            3.- ¿El egresado requiere o requirió 
                            actualizar sus conocomientos con base a 
                            las necesidades de la empresa?
                        </p>
                    </div>
                    <div class="container--options-question">
                        <div class="container-question-radioB">
                            <div class="more-options">
                                <div class="radio-option">
                                    <input type="radio" id="calification-3-radio-1" name="pregunta_3" value="Si" onchange="validacion_inputs(this.value, 'pregunta_3-input-a','pregunta_3-input-b','pregunta_3-input-c','pregunta_3-input-d')"/>
                                    <label for="calification-3-radio-1">Si</label>
                                </div>
                                <p>¿cuáles?</p>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="calification-3-radio-2" name="pregunta_3" value="No" onchange="validacion_inputs(this.value, 'pregunta_3-input-a','pregunta_3-input-b','pregunta_3-input-c','pregunta_3-input-d')"/>
                                <label for="calification-3-radio-2">No</label>
                            </div>
                        </div>
                        <div class="container-question-input_s">
                            <div class="container-more-options">
                                <div class="container-input">
                                    <div class="more-options-2"><p>a)</p></div>
                                    <input type="text" id="pregunta_3-input-a" name="pregunta_3_input[]" placeholder="...." readonly="true">
                                </div>
                                <div class="container-input">
                                    <div class="more-options-2"><p>c)</p></div>
                                    <input type="text" id="pregunta_3-input-c" name="pregunta_3_input[]" placeholder="...." readonly="true">
                                </div>
                            </div>
                            <div class="container-more-options">
                                <div class="container-input">
                                    <div class="more-options-2"><p>b)</p></div>
                                    <input type="text" id="pregunta_3-input-b" name="pregunta_3_input[]" placeholder="...." readonly="true">
                                </div>
                                <div class="container-input">
                                    <div class="more-options-2"><p>d)</p></div>
                                    <input type="text" id="pregunta_3-input-d" name="pregunta_3_input[]" placeholder="...." readonly="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container--question-4">
                    <div class="text-question">
                        <p>
                            4.- Seleccione máximo cinco habilidades 
                            que considere importantes deba desarrollar 
                            el egresado para realizar sus actividades.
                        </p>
                    </div>
                    <div id="question-4" class="container-options-radioB">
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-1" name="pregunta_4[]" value="Comunicar"  onchange="validacion('question-4', this)" />
                                    <label for="habilidades-checkbox-1">Comunicar</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-2" name="pregunta_4[]" value="Dirigir"  onchange="validacion('question-4', this)" />
                                    <label for="habilidades-checkbox-2">Dirigir</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-3" name="pregunta_4[]" value="Trabajo en equipo"  onchange="validacion('question-4', this)" />
                                    <label for="habilidades-checkbox-3">Trabajo en equipo</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-4" name="pregunta_4[]" value="Identificar y resolver problemas" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-4">Identificar y resolver problemas</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-5" name="pregunta_4[]" value="Analizar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-5">Analizar</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-6" name="pregunta_4[]" value="Negociar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-6">Negociar</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-7" name="pregunta_4[]" value="Aprender" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-7">Aprender</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-8" name="pregunta_4[]" value="Ser creativo" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-8">Ser creativo</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-9" name="pregunta_4[]" value="Proponer" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-9">Proponer</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-10" name="pregunta_4[]" value="Categorizar/Clasificar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-10">Categorizar/Clasificar</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-11" name="pregunta_4[]" value="Describir/Explicar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-11">Describir/Explicar</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-12" name="pregunta_4[]" value="Evaluar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-12">Evaluar</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-13" name="pregunta_4[]" value="Procesar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-13">Procesar</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-14" name="pregunta_4[]" value="Expresar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-14">Expresar</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-15" name="pregunta_4[]" value="Escuchar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-15">Escuchar</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-16" name="pregunta_4[]" value="Resolver conflictos" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-16">Resolver conflictos</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-17" name="pregunta_4[]" value="Solicitar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-17">Solicitar</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-18" name="pregunta_4[]" value="Decidir" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-18">Decidir</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-19" name="pregunta_4[]" value="Interpretar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-19">Interpretar</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-20" name="pregunta_4[]" value="Rebatir" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-20">Rebatir</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades-checkbox-21" name="pregunta_4[]" value="Innovar" onchange="validacion('question-4', this)"/>
                                    <label for="habilidades-checkbox-21">Innovar</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_input">
                            <div class="radio-option">
                                <input type="checkbox" id="habilidades-checkbox-22" name="pregunta_4[]" value="Otras" onchange="validacion('question-4', this); validacion_inputs_checkbox('pregunta_4[]',this,'pregunta_4-input')"/>
                                <label for="habilidades-checkbox-22">Otras:</label>
                            </div>
                            <div class="input-option"><input type="text" id="pregunta_4-input" name="" placeholder="...." readonly="true"></div>
                        </div>
                    </div>
                </div>
                <div class="container--question-5">
                    <div class="text-question">
                        <p>
                            5.- Considerando las habilidades seleccionadas 
                            en el punto 4, ¿qúe habilidades no demuestra o
                            demostró el egresado para realizar sus actividades, 
                            al momento de ingresar a su empresa?
                        </p>
                    </div>
                    <div class="container-question-input_s-2">
                        <div class="container-more-options">
                            <div class="container-input">
                                <div class="more-options-2"><p>a)</p></div>
                                <input type="text" id="fname" name="pregunta_5[]" placeholder="....">
                            </div>
                            <div class="container-input">
                                <div class="more-options-2"><p>d)</p></div>
                                <input type="text" id="fname" name="pregunta_5[]" placeholder="....">
                            </div>
                        </div>
                        <div class="container-more-options">
                            <div class="container-input">
                                <div class="more-options-2"><p>b)</p></div>
                                <input type="text" id="fname" name="pregunta_5[]" placeholder="....">
                            </div>
                            <div class="container-input">
                                <div class="more-options-2"><p>e)</p></div>
                                <input type="text" id="fname" name="pregunta_5[]" placeholder="....">
                            </div>
                        </div>
                        <div class="container-more-options">
                            <div class="container-input">
                                <div class="more-options-2"><p>c)</p></div>
                                <input type="text" id="fname" name="pregunta_5[]" placeholder="....">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container--question-6">
                    <div class="text-question">
                        <p>
                            6.- ¿El egresado carece o careció del dominio de 
                            alguna(s) área(s) conocimiento(s) básico(s) para 
                            realizar sus habilidades, al momento de ingresar 
                            a su empresa?
                        </p>
                    </div>
                    <div class="container--options-question">
                        <div class="container-question-radioB">
                            <div class="more-options">
                                <div class="radio-option">
                                    <input type="radio" id="calification-6-radio-1" name="pregunta_6" value="Si" onchange="validacion_inputs(this.value, 'pregunta_6-input-a','pregunta_6-input-b','pregunta_6-input-c','pregunta_6-input-d')"/>
                                    <label for="calification-6-radio-1">Si</label>
                                </div>
                                <p>¿cuáles?</p>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="calification-6-radio-2" name="pregunta_6" value="No" onchange="validacion_inputs(this.value, 'pregunta_6-input-a','pregunta_6-input-b','pregunta_6-input-c','pregunta_6-input-d')"/>
                                <label for="calification-6-radio-2">No</label>
                            </div>
                        </div>
                        <div class="container-question-input_s">
                            <div class="container-more-options">
                                <div class="container-input">
                                    <div class="more-options-2"><p>a)</p></div>
                                    <input type="text" id="pregunta_6-input-a" name="pregunta_6_input[]" placeholder="...." readonly="true">
                                </div>
                                <div class="container-input">
                                    <div class="more-options-2"><p>c)</p></div>
                                    <input type="text" id="pregunta_6-input-c" name="pregunta_6_input[]" placeholder="...." readonly="true">
                                </div>
                            </div>
                            <div class="container-more-options">
                                <div class="container-input">
                                    <div class="more-options-2"><p>b)</p></div>
                                    <input type="text" id="pregunta_6-input-b" name="pregunta_6_input[]" placeholder="...." readonly="true">
                                </div>
                                <div class="container-input">
                                    <div class="more-options-2"><p>d)</p></div>
                                    <input type="text" id="pregunta_6-input-d" name="pregunta_6_input[]" placeholder="...." readonly="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container--question-7">
                    <div class="text-question">
                        <p>
                            7.- Seleccione máximo cinco valores o 
                            actividades que considere importante 
                            debe tener el egresado para realizar 
                            sus actividades, al momento de ingresar 
                            a su empresa?
                        </p>
                    </div>
                    <div id="question-7" class="container-options-radioB">
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-1" name="pregunta_7[]" value="Respeto" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-1">Respeto</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-2" name="pregunta_7[]" value="Honestidad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-2">Honestidad</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-3" name="pregunta_7[]" value="Lealtad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-3">Lealtad</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-4" name="pregunta_7[]" value="Discrecionalidad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-4">Discrecionalidad</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-5" name="pregunta_7[]" value="Responsabilidad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-5">Responsabilidad</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-6" name="pregunta_7[]" value="Tolerancia" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-6">Tolerancia</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-7" name="pregunta_7[]" value="Respeto a la naturaleza" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-7">Respeto a la naturaleza</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-8" name="pregunta_7[]" value="Imparcialidad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-8">Imparcialidad</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-9" name="pregunta_7[]" value="Solidaridad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-9">Solidaridad</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-10" name="pregunta_7[]" value="Integridad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-10">Integridad</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-11" name="pregunta_7[]" value="Disciplina" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-11">Disciplina</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-12" name="pregunta_7[]" value="Eficiencia" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-12">Eficiencia</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-13" name="pregunta_7[]" value="Perseverancia" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-13">Perseverancia</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-14" name="pregunta_7[]" value="Puntualidad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-14">Puntualidad</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-15" name="pregunta_7[]" value="Calidad en el trabajo" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-15">Calidad en el trabajo</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-16" name="pregunta_7[]" value="Limpieza" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-16">Limpieza</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-17" name="pregunta_7[]" value="Disponibilidad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-17">Disponibilidad</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-18" name="pregunta_7[]" value="Profesionalidad" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-18">Profesionalidad</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-19" name="pregunta_7[]" value="Empatia" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-19">Empatia</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-20" name="pregunta_7[]" value="Honradez" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-20">Honradez</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="valores-checkbox-21" name="pregunta_7[]" value="Justicia" onchange="validacion('question-7', this)"/>
                                    <label for="valores-checkbox-21">Justicia</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_input">
                            <div class="radio-option">
                                <input type="checkbox" id="valores-checkbox-22" name="pregunta_7[]" value="Otras" onchange="validacion('question-7', this); validacion_inputs_checkbox('pregunta_7[]',this,'pregunta_7-input')"/>
                                <label for="valores-checkbox-22">Otras:</label>
                            </div>
                            <div class="input-option"><input type="text" id="pregunta_7-input" name="" placeholder="...." readonly="true"></div>
                        </div>
                    </div>
                </div>
                <div class="container--question-8">
                    <div class="text-question">
                        <p>
                            8.- Considerando las habilidades seleccionadas 
                            en el punto 7, ¿qúe no demuestra o demostró el
                            egresado para realizar sus actividades, al momento 
                            de ingresar a su empresa?
                        </p>
                    </div>
                    <div class="container-question-input_s-2">
                        <div class="container-more-options">
                            <div class="container-input">
                                <div class="more-options-2"><p>a)</p></div>
                                <input type="text" id="fname" name="pregunta_8[]" placeholder="....">
                            </div>
                            <div class="container-input">
                                <div class="more-options-2"><p>d)</p></div>
                                <input type="text" id="fname" name="pregunta_8[]" placeholder="....">
                            </div>
                        </div>
                        <div class="container-more-options">
                            <div class="container-input">
                                <div class="more-options-2"><p>b)</p></div>
                                <input type="text" id="fname" name="pregunta_8[]" placeholder="....">
                            </div>
                            <div class="container-input">
                                <div class="more-options-2"><p>e)</p></div>
                                <input type="text" id="fname" name="pregunta_8[]" placeholder="....">
                            </div>
                        </div>
                        <div class="container-more-options">
                            <div class="container-input">
                                <div class="more-options-2"><p>c)</p></div>
                                <input type="text" id="fname" name="pregunta_8[]" placeholder="....">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container--question-9">
                    <div class="text-question">
                        <p>
                            9.- Seleccione máximo cinco habilidades 
                            que considere importantes deba desarrollar 
                            el egresado para realizar sus actividades.
                        </p>
                    </div>
                    <div id="question-9" class="container-options-radioB-2">
                        <div class="container-radioB_s-2">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades_a_desarrollar-checkbox-1" name="pregunta_9[]" value="Competencias laborales" onchange="validacion('question-9', this)"/>
                                    <label for="habilidades_a_desarrollar-checkbox-1">Competencias laborales</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades_a_desarrollar-checkbox-2" name="pregunta_9[]" value="Estar titulado" onchange="validacion('question-9', this)"/>
                                    <label for="habilidades_a_desarrollar-checkbox-2">Estar titulado</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades_a_desarrollar-checkbox-3" name="pregunta_9[]" value="Acreditar examen" onchange="validacion('question-9', this)"/>
                                    <label for="habilidades_a_desarrollar-checkbox-3">Acreditar el examen de selección</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_s">
                            <div class="column-radioB-1">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades_a_desarrollar-checkbox-4" name="pregunta_9[]" value="Ser egresado del SUNEO" onchange="validacion('question-9', this)"/>
                                    <label for="habilidades_a_desarrollar-checkbox-4">Ser egresado del SUNEO</label>
                                </div>
                            </div>
                            <div class="column-radioB-2">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades_a_desarrollar-checkbox-5" name="pregunta_9[]" value="Dominar un idioma extranjero" onchange="validacion('question-9', this)"/>
                                    <label for="habilidades_a_desarrollar-checkbox-5">Dominar un idioma extranjero</label>
                                </div>
                            </div>
                            <div class="column-radioB-3">
                                <div class="radio-option">
                                    <input type="checkbox" id="habilidades_a_desarrollar-checkbox-6" name="pregunta_9[]" value="Habilidades socio-comunicativas" onchange="validacion('question-9', this)"/>
                                    <label for="habilidades_a_desarrollar-checkbox-6">Habilidades socio-comunicativas</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-radioB_input-2">
                            <div class="radio-option">
                                <input type="checkbox" id="habilidades_a_desarrollar-checkbox-7" name="pregunta_9[]" value="Otras" onchange="validacion('question-9', this); validacion_inputs_checkbox('pregunta_9[]',this,'pregunta_9-input')"/>
                                <label for="habilidades_a_desarrollar-checkbox-7">Otras:</label>
                            </div>
                            <div class="input-option"><input type="text" id="pregunta_9-input" name="" placeholder="...." readonly="true"></div>
                        </div>
                    </div>
                </div>
                <div class="container--question-10">
                    <div class="text-question">
                        <p>
                            10. Indique el valor que como empleador 
                            le da a los siguientes factores, al 
                            momento de contratar a un egresado.
                        </p>
                    </div>
                    <div class="container-table">
                        <div class="container--description">
                            <p>Indispensable</p>
                            <p>No indispensable</p>
                        </div>
                        <div class="container--score">
                            <div class="text--score-1"><p>0</p></div>
                            <div class="text--score-2"><p>3</p></div>
                            <div class="text--score-3"><p>4</p></div>
                            <div><p>5</p></div>
                        </div>
                        <table>
                            <tr class="table-other-color-1">
                                <td class="text-table">a) Área o campo de estudio.</td>
                                <td class="table-column-1">
                                    <input type="radio" id="factor_valuation_a-radio-1" name="pregunta_10a" value="0" />
                                    <label for="factor_valuation_a-radio-1"></label>
                                </td>
                                <td class="table-column-2">
                                    <input type="radio" id="factor_valuation_a-radio-2" name="pregunta_10a" value="3" />
                                    <label for="factor_valuation_a-radio-2"></label>
                                </td>
                                <td class="table-column-3">
                                    <input type="radio" id="factor_valuation_a-radio-3" name="pregunta_10a" value="4" />
                                    <label for="factor_valuation_a-radio-3"></label>
                                </td>
                                <td class="table-column-4">
                                    <input type="radio" id="factor_valuation_a-radio-4" name="pregunta_10a" value="5" />
                                    <label for="factor_valuation_a-radio-4"></label>
                                </td>
                            </tr>
                            <tr class="table-other-color-2">
                                <td class="text-table">b) Título profesional.</td>
                                <td class="table-column-1">
                                    <input type="radio" id="factor_valuation_b-radio-1" name="pregunta_10b" value="0" />
                                    <label for="factor_valuation_b-radio-1"></label>
                                </td>
                                <td class="table-column-2">
                                    <input type="radio" id="factor_valuation_b-radio-2" name="pregunta_10b" value="3" />
                                    <label for="factor_valuation_b-radio-2"></label>
                                </td>
                                <td class="table-column-3">
                                    <input type="radio" id="factor_valuation_b-radio-3" name="pregunta_10b" value="4" />
                                    <label for="factor_valuation_b-radio-3"></label>
                                </td>
                                <td class="table-column-4">
                                    <input type="radio" id="factor_valuation_b-radio-4" name="pregunta_10b" value="5" />
                                    <label for="factor_valuation_b-radio-4"></label>
                                </td>
                            </tr>
                            <tr class="table-other-color-1">
                                <td class="text-table">c) Experiencia laboral.</td>
                                <td class="table-column-1">
                                    <input type="radio" id="factor_valuation_c-radio-1" name="pregunta_10c" value="0" />
                                    <label for="factor_valuation_c-radio-1"></label>
                                </td>
                                <td class="table-column-2">
                                    <input type="radio" id="factor_valuation_c-radio-2" name="pregunta_10c" value="3" />
                                    <label for="factor_valuation_c-radio-2"></label>
                                </td>
                                <td class="table-column-3">
                                    <input type="radio" id="factor_valuation_c-radio-3" name="pregunta_10c" value="4" />
                                    <label for="factor_valuation_c-radio-3"></label>
                                </td>
                                <td class="table-column-4">
                                    <input type="radio" id="factor_valuation_c-radio-4" name="pregunta_10c" value="5" />
                                    <label for="factor_valuation_c-radio-4"></label>
                                </td>
                            </tr>
                            <tr class="table-other-color-2">
                                <td class="text-table">d) conocimiento de idioma extranjero.</td>
                                <td class="table-column-1">
                                    <input type="radio" id="factor_valuation_d-radio-1" name="pregunta_10d" value="0" />
                                    <label for="factor_valuation_d-radio-1"></label>
                                </td>
                                <td class="table-column-2">
                                    <input type="radio" id="factor_valuation_d-radio-2" name="pregunta_10d" value="3" />
                                    <label for="factor_valuation_d-radio-2"></label>
                                </td>
                                <td class="table-column-3">
                                    <input type="radio" id="factor_valuation_d-radio-3" name="pregunta_10d" value="4" />
                                    <label for="factor_valuation_d-radio-3"></label>
                                </td>
                                <td class="table-column-4">
                                    <input type="radio" id="factor_valuation_d-radio-4" name="pregunta_10d" value="5" />
                                    <label for="factor_valuation_d-radio-4"></label>
                                </td>
                            </tr>
                            <tr class="table-other-color-1">
                                <td class="text-table">e) Recomendación/ referencias.</td>
                                <td class="table-column-1">
                                    <input type="radio" id="factor_valuation_e-radio-1" name="pregunta_10e" value="0" />
                                    <label for="factor_valuation_e-radio-1"></label>
                                </td>
                                <td class="table-column-2">
                                    <input type="radio" id="factor_valuation_e-radio-2" name="pregunta_10e" value="3" />
                                    <label for="factor_valuation_e-radio-2"></label>
                                </td>
                                <td class="table-column-3">
                                    <input type="radio" id="factor_valuation_e-radio-3" name="pregunta_10e" value="4" />
                                    <label for="factor_valuation_e-radio-3"></label>
                                </td>
                                <td class="table-column-4">
                                    <input type="radio" id="factor_valuation_e-radio-4" name="pregunta_10e" value="5" />
                                    <label for="factor_valuation_e-radio-4"></label>
                                </td>
                            </tr>
                            <tr class="table-other-color-2">
                                <td class="text-table">f) Imagen de la institución de Educación Superior.</td>
                                <td class="table-column-1">
                                    <input type="radio" id="factor_valuation_f-radio-1" name="pregunta_10f" value="0" />
                                    <label for="factor_valuation_f-radio-1"></label>
                                </td>
                                <td class="table-column-2">
                                    <input type="radio" id="factor_valuation_f-radio-2" name="pregunta_10f" value="3" />
                                    <label for="factor_valuation_f-radio-2"></label>
                                </td>
                                <td class="table-column-3">
                                    <input type="radio" id="factor_valuation_f-radio-3" name="pregunta_10f" value="4" />
                                    <label for="factor_valuation_f-radio-3"></label>
                                </td>
                                <td class="table-column-4">
                                    <input type="radio" id="factor_valuation_f-radio-4" name="pregunta_10f" value="5" />
                                    <label for="factor_valuation_f-radio-4"></label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="container--question-11">
                    <div class="text-question">
                        <p>
                            11.- ¿Continuario contratando 
                            egresados del Sistema de Universidades 
                            Estatales del Estado de Oaxaca?
                        </p>
                    </div>
                    <div class="container--question-11-radioB">
                        <div class="container-option-true">
                            <div class="more-options">
                                <div class="radio-option">
                                    <input type="radio" id="calification-11-radio-1" name="pregunta_11" value="Si" onchange="validacion_inputs('No', 'pregunta_11-input')"/>
                                    <label for="calification-11-radio-1">Si</label>
                                </div>
                                <p>¿cuáles?</p>
                            </div>
                        </div>
                        <div class="container-option-false">
                            <div class="radio-option">
                                <input type="radio" id="calification-11-radio-2" name="pregunta_11" value="No" onchange="validacion_inputs('Si', 'pregunta_11-input')"/>
                                <label for="calification-11-radio-2">No,</label>
                            </div>
                            <div class="container-label"><p>¿porque?</p></div>
                            <div class="container-option-false-input"><input type="text" id="pregunta_11-input" name="pregunta_11_input[]" placeholder="...." readonly="true"></div>
                        </div>
                    </div>
                </div>
                <div class="container--question-12">
                    <div class="text-question">
                        <p>
                            12. ¿Qué recomendaría mejorar en la 
                            formación profesional de los egresados 
                            del SUNEO?
                        </p>
                    </div>
                    <div class="container--question-12-input">
                        <textarea name="pregunta_12" id="" cols="30" rows="5" placeholder="Agrega recomendaciones aquí..."></textarea>
                    </div>
                </div>
            </div>
            <div class="main--container-button">
                <p>*Campos obligatorios</p>
                <div class="container-button">
                    <!---Boton de regresar-->
                    <a href="{{ route('perfil-empresa')}}">Regresar</a>
                    <!-- Boton de Finalizar-->
                    <button type="submit">Finalizar</button>
                </div>
            </div>
        </div>
    </form>
@endsection