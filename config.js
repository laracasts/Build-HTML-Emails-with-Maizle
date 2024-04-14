/** @type {import('@maizzle/framework').Config} */

/*
|-------------------------------------------------------------------------------
| Development config                      https://maizzle.com/docs/environments
|-------------------------------------------------------------------------------
|
| The exported object contains the default Maizzle settings for development.
| This is used when you run `maizzle build` or `maizzle serve` and it has
| the fastest build time, since most transformations are disabled.
|
*/

module.exports = {
  locals: {
    companyName: 'My Company Name'
  },
  companyName: 'My Company Name',
  build: {
    posthtml: {
      outlook: {tag: 'mso'},
      // fetch: {
      //   tags: ['get'],
      //   attribute: 'resource'
      // }
    },
    templates: {
      source: 'src/templates',
      destination: {
        path: 'build_local',
      },
      assets: {
        source: 'src/images',
        destination: 'images',
      },
    },
  },
}
