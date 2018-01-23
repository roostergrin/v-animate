const route = '//api.roostertest3.com/wp-json'

const api = () => {
  return document.location.hostname === 'localhost' ? route : document.location.protocol + route
}

export default api()
