import React from "react"
import { graphql } from "gatsby"
import Layout from "../components/layout"
import Teaser from "./node-teaser"

export default ({ data }) => {
  const posts = data.allNodeArticle.edges

  const list = posts.map(item => {
    var numComments = 0
    data.allDisqusThread.edges.map((comment) => {
      if (comment.node.threadId !==  item.node.id) {
        return false
      }
      if (!comment.node.comments.length) {
        return false
      }
      comment.node.comments.forEach(() => {
        return numComments++
      })
      return true
    })
    data.allGithubComment.nodes.filter((comment) => {
      if (comment.drupalId !==  item.node.drupal_id) {
        return false
      }
      if (!comment.comments.length) {
        return false
      }
      comment.comments.forEach(() => {
        return numComments++
      })
      return true
    })
    return <Teaser numComments={numComments} key={item.node.id} node={item.node}></Teaser>
  })
  return (
    <Layout>
      <div className="term-list">{list}</div>
    </Layout>
  )
}

export const query = graphql`
  query($id: String!) {
    allNodeArticle(
      sort: { fields: created, order: DESC }
      filter: {
        relationships: { field_tags: { elemMatch: { id: { eq: $id } } } }
      }
    ) {
      edges {
        node {
          title
          id
          drupal_id
          path {
            alias
          }
          relationships {
            field_tags {
              name
              id
              drupal_internal__tid
            }
          }
          created
        }
      }
    }

    allDisqusThread {
      edges {
        node {
          id
          comments {
            author {
              username
              name
            }
            id
            createdAt
            message
          }
          threadId
          link
        }
      }
    }

    allGithubComment {
      nodes {
        drupalId
        comments {
          body
          id
          created_at
          user {
            login
          }
        }
      }
    }
  }
`
