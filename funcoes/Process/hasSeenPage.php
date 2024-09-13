<?php

function hasSeenPage($page) {
    session_start();
    if (!isset($_SESSION['seen_pages'])) {
        $_SESSION['seen_pages'] = [];
    }

    if (in_array($page, $_SESSION['seen_pages'])) {
        return true;
    } else {
        $_SESSION['seen_pages'][] = $page;
        return false;
    }
}

function getSeenPages() {
    session_start();
    if (!isset($_SESSION['seen_pages'])) {
        $_SESSION['seen_pages'] = [];
    }
    return $_SESSION['seen_pages'];
}

?>