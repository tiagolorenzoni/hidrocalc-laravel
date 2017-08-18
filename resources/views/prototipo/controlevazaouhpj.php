<?php
$errors = array();
$errorscomp = array();
$errorsindex = array();
$multi = null;
$multiuhpjindexador = null;
$multiuhpjcomportas = null;
$edit = array_key_exists('id', $_GET);
if ($edit) {
    $multi = Utils::getMultiByGetId();
} else {
    // set defaults
    $multi = new Multi();
    $multiuhpjindexador = new Multiuhpjindexador();
    $multiuhpjcomportas = new Multiuhpjcomportas();
    $createOn = new DateTime("+0 day");
    $createOn->setTime(0, 0, 0);
    $multi->setCreatedOn($createOn);
}

if (array_key_exists('cancel', $_POST)) {
    // redirect
    if ($edit) {
    Utils::redirect('detail', array('id' => $multi->getId()));
    } else { Utils::redirect('controlevazaouhpj', array('id' => $multi->getId()));}
    
} elseif (array_key_exists('save', $_POST)) {
    // for security reasons, do not map the whole $_POST['multi']
    $data = array(
        'data' => $_POST['multi']['data'],
        'hora' => $_POST['multi']['hora'],
        'nivel_montante' => $_POST['multi']['nivel_montante'],
        'nivel_jusante' => $_POST['multi']['nivel_jusante'],
        'geracao_ug1' => $_POST['multi']['geracao_ug1'],
        'geracao_ug2' => $_POST['multi']['geracao_ug2'],
        'chuva' => $_POST['multi']['chuva'],
        'vazao_outras_estruturas' => $_POST['multi']['vazao_outras_estruturas'],
    );
    $comportasuhpj = array(
        'comporta1' => $_POST['multiuhpjcomportas']['comporta1'],
        'comporta2' => $_POST['multiuhpjcomportas']['comporta2'],
        'comporta3' => $_POST['multiuhpjcomportas']['comporta2'],
        'comporta4' => $_POST['multiuhpjcomportas']['comporta5'],
        'comporta5' => $_POST['multiuhpjcomportas']['comporta5'],
        'comporta6' => $_POST['multiuhpjcomportas']['comporta6'],
        'comportabasc' => $_POST['multiuhpjcomportas']['comportabasc'],
    );
        $indexadoresuhpj = array(
        'indexador_vazao_vertida' => $_POST['multiuhpjindexador']['indexador_vazao_vertida'],
        'indexador_vazao_outras' => $_POST['multiuhpjindexador']['indexador_vazao_outras'],
    );
       
    // map
    MultiMapper::map($multi, $data);
    MultiMapper::mapcomporta($multiuhpjcomportas, $comportasuhpj);
    MultiMapper::mapindexador($multiuhpjindexador, $indexadoresuhpj);
     
    // validate
    $errors = MultiValidator::validacao($multi);
    //$errorscomp = MultiValidator::validacomp($multiuhpjcomportas);
    //$errorsindex = MultiValidator::validaindex($multiuhpjindexador);
    // validate  
    
    if (empty($errors)) {
        // savegpj
        $dao = new MultiDao();
        $multi = $dao->save($multi);   
        Flash::addFlash('Tarefa salva com sucesso.');
        // redirect
        Utils::redirect('detail', array('id' => $multi->getId()));
    }
}