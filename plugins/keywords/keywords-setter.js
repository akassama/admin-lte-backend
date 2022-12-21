///////////////////////////
///////Keyword setter//////
///////////////////////////
document.addEventListener("DOMContentLoaded", function(event) {
    //keyup funtion for input field
    document.getElementsByClassName("keywords-title")[0].onkeyup = function() {onKeyUpFunction()};
    function onKeyUpFunction() {

      var postTitle = "";
      if(elementClassExists('keywords-title')){
        //get input value and pass to setKeywords function
        var postTitle = document.getElementsByClassName('keywords-title')[0].value;
      }

      if(elementClassExists('seo-keywords-data')){
        document.getElementsByClassName('seo-keywords-data')[0].value = setKeywords(postTitle);
      }

      //set other seo data
      if(elementClassExists('seo-title-data') && elementClassExists('seo-description-data')){
        document.getElementsByClassName('seo-title-data')[0].value = postTitle;
        document.getElementsByClassName('seo-description-data')[0].value = postTitle;
      }

      var hostname = ( window.location.origin === "file://") ? "https://example.com/{section}/" : window.location.origin + "/{section}/" ;

      if(elementClassExists('slug-data') ){
        document.getElementsByClassName('slug-data')[0].value = "";
        if (postTitle !== "") {
          //set post url slug
          document.getElementsByClassName('slug-data')[0].value = convertToSlug(postTitle);
          if(elementClassExists('slug-url-prefix')){
            $(".slug-url-prefix").text(hostname);
          }
        }
      }

      //if title is not empty, display SEO preview
  		if (postTitle !== "") {
  			$('.seo-display-div').addClass('d-block').removeClass('d-none');
  			$('.seo-display-title').text(postTitle);
  			$('.seo-display-link').text(hostname + "/" + convertToSlug(postTitle));
  			var formatDate = getMonthName() + " " + getCurrentDay() + ", " + getYearName();
  			$('.seo-display-date').text(formatDate + " - " + postTitle);
  		}
  		else {
  			$(".seo-display-div").css("display", "none");
  			$('.seo-display-div').addClass('d-none').removeClass('d-block');
  		}

    }

    //function to set the keywords
    function setKeywords(title){
      //set keywords variable to empty and set minimum word length
      var keywords = "";
      var min_lenght = 3;

      //split input text by space
      var split_text = title.split(" ");

      //loop through array
      for(var i = 0; i < split_text.length; i++) {
        //remove possible dot
        var text = split_text[i].replace(/\./g,'');

        //check if word meets criteria
        if(meetsCriteria(text, keywords, min_lenght)){
            //add to keywords string separated by comma
            keywords += text+",";
        }
      }

      //remove possible consecutive commas
      keywords = keywords.replace(/^,|,$|(,)+/g, '$1');

      //remove last appended comma
      keywords = keywords.replace(/,\s*$/, "");

      return keywords;
    }

    //function to check if text meets criteria
    function meetsCriteria(text, current_keywords, min_lenght){
      //words to exclude
          var exclude_array = ['a','about','all','also','and','as','at','be','because','but','by','can','come','could','day','do','even','find','first','for','from','get','give','go','have','he','her','here','him','his','how','I','if','in','into','it','its','just','know','like','look','make','man','many','me','more','my','new','no','not','now','of','on','one','only','or','other','our','out','people','say','see','she','so','some','take','tell','than','that','the','their','them','then','there','these','they','thing','think','this','those','time','to','two','up','use','very','want','way','we','well','what','when','which','who','will','with','would','year','you','your','has','was','why'];

      //check if word meets lenght, not number, not a duplicate, and not in exclude array
      if(text.length >= min_lenght && isNaN(text) && !current_keywords.includes(text) && !exclude_array.includes(text.toLowerCase())) {
        return true;
      }
      return false;
    }

    //////////////////////////////////////////////
    //function to generate text to slug function//
    //////////////////////////////////////////////
    function convertToSlug(text)
    {
        return text
            .toLowerCase()
            .replace(/[^\w ]+/g,'')
            .replace(/ +/g,'-');
    }

    /////////////////////////////////
    //check if element class exists//
    /////////////////////////////////
    function elementClassExists(className){
      var elemCheck = document.getElementsByClassName(className);
      if (elemCheck.length > 0) {
          return true
      }
      return false;
    }


    ///////////////////////////
    /////Get current date/////
    ///////////////////////////
    function getCurrentDate(){
    var today = new Date();
    var dd = today.getDate();

    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    if(dd<10)
    {
      dd='0'+dd;
    }

    if(mm<10)
    {
      mm='0'+mm;
    }

    today = dd+'-'+mm+'-'+yyyy;
    return today;
    }

    ///////////////////////////
    ///Get current date month///
    ///////////////////////////
    function getMonthName() {
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";

    var d = new Date();
    var month = month[d.getMonth()];

    return month;
    }

    ///////////////////////////
    ///Get current date year///
    ///////////////////////////
    function getYearName(){
    var d = new Date();
      var year = d.getFullYear();
      return year;
    }

    ///////////////////////////
    //////Get current day//////
    ///////////////////////////
    function getCurrentDay(){
    var d = new Date();
      var day = d.getDate();
      return day;
    }

  });