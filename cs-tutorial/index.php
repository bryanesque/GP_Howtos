<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "ru":
        include("ru.html");
        break;
    case "de":
        include("de.html");
        break;
    case "hu":
        include("hu.html");
        break;
    case "no":
        include("no.html");
        break;
    case "sl":
        include("sl_SI.html");
        break;
    case "sv":
        include("sv.html");
        break;
    case "tr":
        include("tr.html");
        break;
    case "bo":
        include("bo.html");
        break;
    case "fr":
        include("fr.html");
        break;
    case "nl":
        include("nl.html");
        break;
    case "sk":
        include("sk.html");
        break;
    case "sr":
        include("sr.html");
        break;
    case "pl":
        include("pl.html");
        break;
    case "vi":
        include("vi.html");
        break;
    case "en":
        include("en.html");
        break;
    case "pl":
        include("pl.html");
        break;    
	case "es":
        include("es.html");
        break;
	case "ar":
        include("ar.html");
        break;
	default:
        //echo "PAGE EN - Setting Default";
        include("en.html");
        //include EN in all other cases of different lang detection
        break;

}
?>