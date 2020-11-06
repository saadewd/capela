
if (window.innerWidth < 700 ) {

    console.log('----------------------')

    if( navigator.userAgent.indexOf("Android") ||navigator.userAgent.indexOf("iOS")){

        let u ='capelaMobile'
        let lo = u.concat(window.location.pathname)
    
    
            // window.location.replace("www.facebook.com");
        
        window.location.replace(`http://capelamissionaria.org.br/${lo}`);
        // window.location.origin = "http://ewdtech.com/capelaMobile/";
    }
}
let u ='capelaMobile'
let lo = u.concat(window.location)
// let lo = window.location
console.log("Location  ::",lo)
