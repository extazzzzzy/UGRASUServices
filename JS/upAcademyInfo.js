function validateForm() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');

    var atLeastOneChecked = false;
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            atLeastOneChecked = true;
            break;
        }
    }

    if (!atLeastOneChecked) {
        alert('Выберите хотя бы одну область деятельности');
        return false;
    }

    return true;
}


var checkboxes = document.querySelectorAll('input[type="checkbox"]');
var upAcademyInfo = document.querySelector('.upAcademyInfo');

checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        upAcademyInfo.innerHTML = '';
        checkboxes.forEach(function (cb) {
            if (cb.checked) {
                switch (cb.value)
                {
                    case "Учебная область":
                        upAcademyInfo.innerHTML += "<h4>Учебная область деятельности</h4>"
                        upAcademyInfo.innerHTML += "<p>Повышенная государственная академическая стипендия назначается за достижения студента в учебной деятельности при соответствии этих достижений одному или нескольким из следующих критериев:</p>";
                        upAcademyInfo.innerHTML += "<ul><li>а) получение студентом в течение не менее 2-х следующих друг за другом промежуточных аттестаций, предшествующих назначению повышенной государственной академической стипендии, только оценок «отлично»;</li>\n" +
                            "<li>б) получение студентом в течение года, предшествующего назначению повышенной государственной академической стипендии, награды (приза) за результаты проектной деятельности и (или) опытно-конструкторской работы;</li>\n" +
                            "<li>в) признание студента победителем или призером международной, всероссийской, ведомственной или региональной олимпиады, конкурса, соревнования, состязания или иного мероприятия, направленных на выявление учебных достижений студентов, проведенных в течение года, предшествующего назначению повышенной государственной академической стипендии.</li></ul>";
                        upAcademyInfo.innerHTML += "<p>В случае наличия в течение года, предшествующего назначению повышенной государственной академической стипендии, пересдачи экзамена (зачета) по неуважительной причине повышенная государственная академическая стипендия за достижения студента в учебной деятельности в соответствии с критерием, указанным в подпункте «а» пункта, не назначается.</p>";
                        break;
                    case "Научно-исследовательская область":
                        upAcademyInfo.innerHTML += "<h4>Научно-исследовательская область деятельности</h4>"
                        upAcademyInfo.innerHTML += "<p>Повышенная государственная академическая стипендия назначается за достижения студента в научно-исследовательской деятельности при соответствии этих достижений одному или нескольким из следующих критериев:</p>"
                        upAcademyInfo.innerHTML += "<ul><li>а) получение студентом в течение года, предшествующего назначению повышенной государственной академической стипендии: награды (приза) за результаты научно-исследовательской работы, проводимой студентом; документа, удостоверяющего исключительное право студента на достигнутый им научный (научно-методический, научно-технический, научнотворческий) результат интеллектуальной деятельности (патент, свидетельство); гранта на выполнение научно-исследовательской работы;</li>\n" + "<li>б) наличие у студента публикации в научном (учебно-научном, учебно-методическом) международном, всероссийском, ведомственном или региональном издании, в издании Университета или иной организации в течение года, предшествующего назначению повышенной государственной академической стипендии.</li></ul>";
                        break;
                    case  "Общественная область":
                        upAcademyInfo.innerHTML += "<h4>Общественная область деятельности</h4>"
                        upAcademyInfo.innerHTML += "<p>Повышенная государственная академическая стипендия назначается за достижения студента в общественной деятельности при соответствии этих достижений одному или нескольким из следующих критериев:</p>";
                        upAcademyInfo.innerHTML += "<ul><li>а) систематическое участие студента в течение года, предшествующего назначению повышенной государственной академической стипендии, в проведении (обеспечении проведения) общественно значимой деятельности социального, культурного, правозащитного, общественно полезного характера, организуемой Университетом или с его участием, подтверждаемое документально;</li>\n" + "<li>б) систематическое участие студента в течение года, предшествующего назначению повышенной государственной академической стипендии, в деятельности по информационному обеспечению общественно значимых мероприятий, общественной жизни Университета, подтверждаемое документально.</li></ul>";
                        break;
                    case "Культурно-творческая область":
                        upAcademyInfo.innerHTML += "<h4>Культурно-творческая область деятельности</h4>"
                        upAcademyInfo.innerHTML += "<p>Повышенная государственная академическая стипендия назначается за достижения студента в культурно-творческой деятельности при соответствии этих достижений одному или нескольким из следующих критериев:</p>";
                        upAcademyInfo.innerHTML += "<ul><li>а) получение студентом в течение года, предшествующего назначению повышенной государственной академической стипендии, награды (приза) за результаты культурнотворческой деятельности, осуществленной им в рамках деятельности, проводимой Университетом или иной организацией, в том числе в рамках конкурса, смотра и иного аналогичного международного, всероссийского, ведомственного, регионального мероприятия, подтверждаемое документально;</li>\n" +
                            "<li>б) публичное представление студентом в течение года, предшествующего назначению повышенной государственной академической стипендии, созданного им произведения литературы или искусства (литературного произведения, драматического, музыкально-драматического произведения, сценарного произведения, хореографического произведения, пантомимы, музыкального произведения с текстом или без текста, аудиовизуального произведения, произведения живописи, скульптуры, графики, дизайна, графического рассказа, комикса, другого произведения изобразительного искусства, произведения декоративно-прикладного, сценографического искусства, произведения архитектуры, градостроительства, садово-паркового искусства, в том числе в виде проекта, чертежа, изображения, макета, фотографического произведения, произведения, полученного способом, аналогичным фотографии, географической, геологической, другой карты, плана, эскиза, пластического произведения, относящегося к географии, топографии и другим наукам, а также другого произведения), подтверждаемое документально;</li>\n" +
                            "<li>в) систематическое участие студента в течение года, предшествующего назначению повышенной государственной академической стипендии, в проведении (обеспечении проведения) публичной культурно-творческой деятельности воспитательного, пропагандистского характера и иной общественно значимой публичной культурно-творческой деятельности, подтверждаемое документально.</li></ul>";
                        break;
                    case  "Спортивная область":
                        upAcademyInfo.innerHTML += "<h4>Спортивная область деятельности</h4>"
                        upAcademyInfo.innerHTML += "<p>Повышенная государственная академическая стипендия назначается за достижения студента в спортивной деятельности при соответствии этих достижений одному или нескольким из следующих критериев:</p>";
                        upAcademyInfo.innerHTML += "<ul><li>а) получение студентом в течение года, предшествующего назначению повышенной государственной академической стипендии, награды (приза) за результаты спортивной деятельности, осуществленной им в рамках спортивных международных, всероссийских, ведомственных, региональных мероприятий, проводимых Университетом или иной организацией;</li>\n" +
                            "<li>б) систематическое участие студента в течение года, предшествующего назначению повышенной государственной академической стипендии, в спортивных мероприятиях воспитательного, пропагандистского характера и (или) иных общественно значимых спортивных мероприятиях, подтверждаемое документально;</li>\n" +
                            "<li>в) выполнение нормативов и требований золотого знака отличия «Всероссийского физкультурно-спортивного комплекса «Готов к труду и обороне» (ГТО) соответствующей возрастной группы на дату назначения повышенной государственной академической стипендии.</li></ul>";
                        upAcademyInfo.innerHTML += "<p>Повышенная государственная академическая стипендия не назначается за достижения в спортивной деятельности студентам, получающим стипендию Президента Российской Федерации, выплачиваемую в соответствии с Указом Президента Российской Федерации от 31 марта 2011 г. № 368 «О стипендиях Президента Российской Федерации спортсменам, тренерам и иным специалистам спортивных сборных команд Российской Федерации по видам спорта, включенным в программы Олимпийских игр, Паралимпийских игр и Сурдлимпийских игр, чемпионам Олимпийских игр, Паралимпийских игр и Сурдлимпийских игр» (Собрание законодательства Российской Федерации, 2011, № 14, ст. 1883; 2013, № 12, ст. 1244).</p>";
                        break;
                }
            }
        });
    });
});