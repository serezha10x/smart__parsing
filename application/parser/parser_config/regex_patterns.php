<?php

    return [
        "ФИО" => "@([А-Я][а-яё]+\s[А-Я][\.\s]{1,2}[А-Я][,.\s]?)|([А-Я][\.\s]{1,2}[А-Я][\.\s]{1,2}[А-Я][а-яё]+)@u", // Фамилия + инициалы (инициал)
        "ДАТЫ" => "@([“'\"\s]\d{1,2}[”'\"\s]\s?[а-я]+\s\d{4})|(\d{1,2}[\.]\d{1,2}[\.]\d{4})@u", // дата (месяц задан названием)
        "EMAILS" => "@\b[A-Za-z0-9._%+-]+\@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b@u",
        "КЛЮЧЕВЫЕ СЛОВА" => "@[Кк]лючевые слова[:][\s]?[а-яА-яёЁ,;\-\s]+@u", // ключевые слова
        "УДК" => "@(УДК)[\s?\d*-?\.?\d*;?]+@ui",

        // ЛИТЕРАТУРА
        "КНИГИ" => "@.*?\d{4}\..*?\d{1,4}.?с@u",
        "ИНТЕРНЕТ-РЕСУРСЫ" => "@(\n.+?URL.+?pdf)|(.+?Режим доступа:\s?.*?www.URL.+?\.(com|ru))|(.*?Интернет-ресурс.*?(com|ru))|(\d{1,2}.*?\[Электронный ресурс\].*?\n)@u",
    ];