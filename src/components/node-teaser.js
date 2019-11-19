import React from "react"
import Tags from "./tags"
import { Link } from "gatsby"

function Teaser({ node }) {
  let pagePath = node.path.alias
  if (!pagePath) {
    pagePath = '/node/' + node.drupal_internal__nid
  }
  let date = new Date(node.created * 1000).toISOString()
  return (
    <article className="node node--view-mode-teaser clearfix" about="/aa-cc" typeof="schema:Article">
        <h2 className="node__title ">
            <Link to={ pagePath }>{ node.title }</Link>
        </h2>
        <div className="node__meta">Post date: {date}</div>
        <div className="read-more">
        <Link to={ pagePath }>Read more</Link>
        </div>
        <div className="comment-count"><a data-disqus-identifier={pagePath} href={pagePath}></a></div>
        <Tags tags={node.relationships.field_tags}></Tags>
    </article>
  )
}

Teaser.defaultProps = {
  node: {}
}

export default Teaser
