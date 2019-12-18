module.exports = {
  siteMetadata: {
    title: `eiriksm.dev`,
    description: `Kick off your next, great Gatsby project with this default starter. This barebones starter ships with the main Gatsby configuration files you might need.`,
    author: `@gatsbyjs`,
  },
  plugins: [
    `gatsby-plugin-postcss`,
    `gatsby-plugin-react-helmet`,
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        name: `images`,
        path: `${__dirname}/src/images`,
      },
    },
    `gatsby-transformer-sharp`,
    `gatsby-plugin-sharp`,
    {
      resolve: `gatsby-plugin-manifest`,
      options: {
        name: `eiriksm.dev`,
        short_name: `eiriksm`,
        start_url: `/`,
        background_color: `#718096`,
        theme_color: `#718096`,
        display: `minimal-ui`,
        icon: `src/images/d8.png`,
      },
    },
    `gatsby-plugin-offline`,
    {
      resolve: `gatsby-source-drupal`,
      options: {
        baseUrl: `https://orkjern.com/`,
      },
    },
  ],
}
