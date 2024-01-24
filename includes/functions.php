<?php

// Form functions
function form()
{
}



// All basic functions 

function redirect_to($location)
{
    header("Location: {$location}");
    exit;
}

function get_all_subjects()
{
    global $conn;
    $subject_query = "select * from subjects ORDER BY position ASC";
    $subjects = $conn->query($subject_query);
    return $subjects;
}

function get_pages_for_subject($subject_id)
{
    global $conn;
    $page_query = "select * from pages where subject_id = {$subject_id} ORDER BY position ASC";
    $pages = $conn->query($page_query);
    return $pages;
}

function get_subject_by_id($subject_id)
{
    global $conn;
    $query = "SELECT * FROM subjects where id = {$subject_id} LIMIT 1";
    $result = $conn->query($query);
    // Will return false if data not found
    return $result->fetch_assoc();
}

function get_page_by_id($page_id)
{
    global $conn;
    $query = "SELECT * FROM pages where id = {$page_id} LIMIT 1";
    $result = $conn->query($query);
    // Will return false if data not found
    return $result->fetch_assoc();
}

function get_selected_page()
{
    global $sel_subject;
    global $sel_page;
    $sel_subject['id'] = null;
    $sel_page['id'] = null;
    if (isset($_GET['subj'])) {
        $sel_subject = get_subject_by_id($_GET['subj']);
    } elseif (isset($_GET['page'])) {
        $sel_page = get_page_by_id($_GET['page']);
    }
}

function navigation($sel_subject, $sel_page)
{

    global $sel_subject;
    global $sel_page;

    $output = "<ul class='subjects'>";
    // Database Query
    // Querying subjects
    $subjects = get_all_subjects();
    if ($subjects->num_rows > 0) {
        while ($subject = $subjects->fetch_assoc()) {
            $class = ($subject['id'] == $sel_subject['id']) ? "selected" : "";
            $output .= "<li class='{$class}'> <a href='edit_subject.php?subj=" . urlencode($subject['id']) . "'>{$subject["menu_name"]}</a> </li>";

            // Querying Pages in a subject
            $pages = get_pages_for_subject($subject['id']);
            $output .= '<ul class="pages">';
            if ($pages->num_rows > 0) {
                while ($page = $pages->fetch_assoc()) {
                    $class = ($page['id'] == $sel_page['id']) ? "selected" : "";
                    $output .= "<li class='{$class}'> <a href='content.php?page=" . urlencode($page['id']) . "'>{$page["menu_name"]}</a> </li>";
                }
            }
            $output .= '</ul>';
        }
    }
    $output .= "</ul>";

    return $output;
}
