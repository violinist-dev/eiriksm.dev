import React from "react"
import { graphql } from "gatsby"
import Layout from "../components/layout"

export default ({ data }) => {
  const post = data.nodeArticle
  let img;
  if (post.relationships.field_image) {
      img = (<img alt={post.title} className="blog-illustration" src={ post.relationships.field_image.localFile.publicURL } />)
  }
  return (
    <Layout>
      <article>
        <h1>{ post.title }</h1>
        <small><em>{ Date(post.created) }</em></small>
        <div className="article-body" dangerouslySetInnerHTML={{ __html: post.body.value }}></div>
        {img}
      </article>
    </Layout>
  )
}

export const query = graphql`
  query($id: String!) {
    nodeArticle(id: { eq: $id }) {
      title
      body {
        value
      }
      created
      relationships {
        field_image {
          localFile {
            publicURL
          }
        }
      }
    }
  }
`