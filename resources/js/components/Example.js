import React from 'react';

function Example() {
    return (
        <div className="antialiased h-screen">
            <header className="ml-28 mt-10">
                <h1 className="text-5xl futura tracking-widest">Mercury</h1>
            </header>

            {/*TODO Extract component*/}
            <input type="text" id="inpa" placeholder="Somethingsomething"
                   className="bg-white border-2 border-caramel rounded-md px-2 py-1 shadow-control text-sm"/>
            <fieldset
                className="flex flex-col justify-between shadow-control border-2 rounded-md border-caramel w-80 p-5">

            </fieldset>
        </div>
    );
}

export default Example;
