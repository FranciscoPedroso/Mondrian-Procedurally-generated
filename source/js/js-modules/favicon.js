export function favicon() {

  // Add different favicon images to the correspondent folder
  var baseURL = window.location.origin;
  var matcher = window.matchMedia('(prefers-color-scheme: dark)');
  matcher.addListener(onUpdate);
  onUpdate();

  function onUpdate() {
    if (matcher.matches) {
      $('link[rel="icon"]').attr('href', baseURL+'/favicon/darkmode/favicon.png');
    } else {
      $('link[rel="icon"]').attr('href', baseURL+'/favicon/lightmode/favicon.png');
    }
  }
}