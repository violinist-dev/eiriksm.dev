import format from 'date-fns/format'
import formatDistance from 'date-fns/formatDistance'
import util from 'util'

function blogFormat(date) {
    var dateFormatted = format(date, 'eeee, LLL qo u')
    var distanceFormmated = formatDistance(date, new Date(), {
        addSuffix: true
    })
    return util.format('%s (%s)', dateFormatted, distanceFormmated)
    
}

export default blogFormat