import React from "react"
import { graphql } from "gatsby"
import Layout from "./layout"
import Teaser from "./node-teaser"
import SEO from "../components/seo"
import { Link } from "gatsby"

export default ({ data, pageContext }) => {
  const posts = data.allNodeArticle.edges
  const { currentPage, numPages } = pageContext
  const isFirst = currentPage === 1
  const isLast = currentPage === numPages
  const prevPage =
    currentPage - 1 === 1 ? "/" : "/blog/" + (currentPage - 1).toString()
  const nextPage = "/blog/" + (currentPage + 1).toString()

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
      <SEO title="Blog" />
      <div>{list}</div>
      <div className="blog-pager">
        {!isFirst && (
          <Link to={prevPage} rel="prev">
            ← Previous Page
          </Link>
        )}
        {!isLast && (
          <Link to={nextPage} rel="next">
            Next Page →
          </Link>
        )}
      </div>
    </Layout>
  )
}

export const query = graphql`
  query($skip: Int!, $limit: Int!) {
    allNodeArticle(
      sort: { fields: created, order: DESC }
      limit: $limit
      skip: $skip
    ) {
      edges {
        node {
          title
          drupal_id
          drupal_internal__nid
          id
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
