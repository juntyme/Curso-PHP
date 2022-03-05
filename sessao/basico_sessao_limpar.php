<?php
/// Obrigatoriamente
session_start();

/// Destroi session
session_destroy();

header('Location: exercicio.php?dir=sessao&file=basico_sessao');