export default function Home() {
  return (
    <main>
      <Hero />
      <SectionOne />
      <Products />
    </main>
  )
}

function Hero() {
  return (
    <section className="relative h-screen">
      <img
        src="/image/Makkah.jpg"
        className="absolute inset-0 w-full h-full object-cover"
      />

      <div className="absolute inset-0 bg-black/30" />

      <div className="relative z-10 flex flex-col items-center justify-center h-full text-white text-center px-6">
        <h1 className="text-5xl font-bold mb-4">Berangkat Sekarang</h1>
        <p className="mb-6 text-lg">
          BOOK NOW!
        </p>
        <button className="bg-black text-white px-6 py-3 rounded-lg">
          Order
        </button>
      </div>
    </section>
  )
}

function SectionOne() {
  return (
    <section className="grid md:grid-cols-2 gap-10 p-10">
      
      {/* TEXT */}
      <div>
        <h2 className="text-3xl font-bold mb-4">Heading</h2>
        <p className="text-gray-500 mb-6">
          A subheading for this section, as long or as short as you like
        </p>

        <div className="flex gap-4">
          <button className="bg-black text-white px-4 py-2 rounded-lg">
            Button
          </button>
          <button className="bg-gray-200 px-4 py-2 rounded-lg">
            Secondary button
          </button>
        </div>
      </div>

      {/* IMAGE */}
      <img
        src="/images/pear2.jpg"
        className="rounded-2xl"
      />
    </section>
  )
}

function Products() {
  return (
    <section className="p-10">
      <h2 className="text-3xl font-bold mb-8">Section heading</h2>

      <div className="grid md:grid-cols-2 gap-8">
        
        {/* Featured */}
        <div>
          <img src="/images/pear.jpg" className="rounded-2xl mb-4" />
          <h3 className="font-semibold">Featured product</h3>
          <p className="text-gray-500 text-sm">
            Description of featured product
          </p>
          <p className="mt-2 font-medium">$10.99</p>
        </div>

        {/* Right side */}
        <div className="flex flex-col gap-6">
          <div>
            <img src="/images/pear2.jpg" className="rounded-2xl mb-2" />
            <h3>Product</h3>
            <p className="text-sm text-gray-500">$10.99</p>
          </div>

          <div>
            <img src="/images/mushroom.jpg" className="rounded-2xl mb-2" />
            <h3>Product</h3>
            <p className="text-sm text-gray-500">$10.99</p>
          </div>
        </div>

      </div>
    </section>
  )
}