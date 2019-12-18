import React from "react"
import { Link } from "gatsby"
const util = require('util')

function Tags({ tags }) {
  const tagList = tags.map((tag) => {
      let path = util.format('/taxonomy/term/%d', tag.drupal_internal__tid)
      return (
          <li key={tag.id}>
              <Link className="mr-4" to={path}>
              {tag.name}
              </Link>
          </li>
      )
  })
  return (
        <div className="clearfix field-type-taxonomy-term-reference">
            <ul className="links field-items">
                {tagList}
            </ul>
        </div>
  )
}

Tags.defaultProps = {
  tags: []
}

export default Tags
