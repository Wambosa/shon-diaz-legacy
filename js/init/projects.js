window.onload = () => main()

function main() {
  let id = "diagram"
  let svgId = "diagram-svg"
  let div = Snap(`#${id}`)

  Snap.load("./diagram/recalls-design-C4-context.svg", frag => {
    frag.node.children[0].id = svgId
    div.append(frag)
    div.click(toggleDiagramFocus(id))

    let paper = Snap(`#${svgId}`)

    // var path = paper.path("M 60 0 L 120 0 L 180 60 L 180 120 L 120 180 L 60 180 L 0 120 L 0 60 Z")
    //   .attr({id: 'follow-path', fill: "none", stroke: "red", opacity: "1" });

    // var rect = paper.rect(60,0,20,20).attr({id:'rect-test', fill: 'blue', opacity: 1 });

    // drawRect( rect )
    // function drawRect( el ) {
    //   el.drawAtPath( path, 3500, { callback: drawRect.bind(null, el) } );
    // };


  })


}

const zoomClass = 'svg-focus'
function toggleDiagramFocus(id) {
  return e => {
    let svg = document.getElementById(id)
    if(svg.classList.contains(zoomClass))
      svg.classList.remove(zoomClass)
    else
      svg.classList.add(zoomClass)
  }
}