import React from 'react';
import ReactDOM from 'react-dom';

function Index() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">PGRC</div>

                    </div>
                </div>
            </div>
        </div>
    );
}

export default Index;

if (document.getElementById('pgrc-welcome')) {
    ReactDOM.render(<Index />, document.getElementById('pgrc-welcome'));
}
