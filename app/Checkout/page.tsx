export default function Home() {
  return (
    <main>
      <ProductPage />
    </main>
  )
}

function ProductPage() {
  return (
    <main className="bg-white min-h-screen">

      {/* NAVBAR */}
      <nav className="flex justify-between items-center p-6">
        <h1 className="font-semibold">Site name</h1>

        <div className="flex items-center gap-6">
          <a>Page</a>
          <a>Page</a>
          <a>Page</a>
          <button className="bg-black text-white px-4 py-2 rounded-lg">
            Button
          </button>
        </div>
      </nav>

      {/* PRODUCT DETAIL */}
      <section className="grid md:grid-cols-2 gap-10 p-10">
        
        {/* IMAGE */}
        <img
          src="/image/Pakage1.jpg"
          className="rounded-2xl w-full"
        />

        {/* INFO */}
        <div>
          <h2 className="text-3xl font-bold mb-2 text-black" >Paket VIP</h2>
          <p className="text-gray-500 mb-4">Aman Nyaman Dan Tenan</p>

          <p className="font-semibold mb-4 text-black">Rp 40 Jt </p>

          <p className="text-gray-500 mb-6">
            Body text for describing what this product is and why this product is simply a must-buy.
          </p>

          <button className="bg-black text-white w-full py-3 rounded-lg mb-4">
            Add to cart
          </button>

          <p className="text-sm text-gray-400">
            Text box for additional details or fine print
          </p>
        </div>
      </section>

      {/* PRODUCT DETAIL 2*/}
      <section className="grid md:grid-cols-2 gap-10 p-10">
        
        {/* IMAGE */}
        <img
          src="/image/Pakage2.jpg"
          className="rounded-2xl w-full"
        />

        {/* INFO */}
        <div>
          <h2 className="text-3xl font-bold mb-2 text-black" >Paket Ekslusif</h2>
          <p className="text-gray-500 mb-4">Cepat dan dapat di andalkan</p>

          <p className="font-semibold mb-4 text-black">Rp 40 Jt </p>

          <p className="text-gray-500 mb-6">
            Body text for describing what this product is and why this product is simply a must-buy.
          </p>

          <button className="bg-black text-white w-full py-3 rounded-lg mb-4">
            Add to cart
          </button>

          <p className="text-sm text-gray-400">
            Text box for additional details or fine print
          </p>
        </div>
      </section>

      {/* RELATED PRODUCTS */}
      <section className="p-10">
        <h2 className="text-2xl font-bold mb-8">Related products</h2>

        <div className="grid md:grid-cols-3 gap-8">

          {[
            { img: "p1.jpg" },
            { img: "p2.jpg" },
            { img: "p3.jpg" },
            { img: "p4.jpg" },
            { img: "p5.jpg" },
            { img: "p6.jpg" },
          ].map((item, i) => (
            <div key={i}>
              <img
                src={`/images/${item.img}`}
                className="rounded-2xl mb-3"
              />
              <h3 className="font-semibold">Product</h3>
              <p className="text-gray-500 text-sm">
                Description of product
              </p>
              <p className="mt-1 font-medium">$10.99</p>
            </div>
          ))}

        </div>
      </section>

      {/* FOOTER */}
      <footer className="border-t p-10 mt-10">
        <div className="grid md:grid-cols-4 gap-6 text-sm text-gray-500">

          <div>Site name</div>

          {[1,2,3].map((_, i) => (
            <div key={i}>
              <p className="font-semibold text-black">Topic</p>
              <p>Page</p>
              <p>Page</p>
              <p>Page</p>
            </div>
          ))}

        </div>
      </footer>

    </main>
  )
}