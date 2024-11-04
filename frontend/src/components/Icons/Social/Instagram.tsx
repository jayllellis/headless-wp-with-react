import React from "react";

interface IProps {
  color?: string;
}

const IconInstagram: React.FC<IProps> = ({
  color = '#0f204c'
}) => {
  return (
    <svg id="IG_Logo" data-name="IG Logo" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
      <g id="Group_7" data-name="Group 7">
        <path id="Path_29" data-name="Path 29" d="M23.565,0H8.435A8.551,8.551,0,0,0,0,8.614V23.386A8.551,8.551,0,0,0,8.435,32H23.565A8.551,8.551,0,0,0,32,23.386V8.614A8.551,8.551,0,0,0,23.565,0m5.571,23.172A5.92,5.92,0,0,1,23.3,29.136H8.7a5.92,5.92,0,0,1-5.839-5.964V8.828A5.92,5.92,0,0,1,8.7,2.864H23.3a5.92,5.92,0,0,1,5.839,5.964ZM16,7.785A8.132,8.132,0,0,0,7.953,16,8.132,8.132,0,0,0,16,24.219,8.132,8.132,0,0,0,24.043,16,8.132,8.132,0,0,0,16,7.785M16,21.3A5.3,5.3,0,1,1,21.189,16,5.247,5.247,0,0,1,16,21.3M26.293,7.344a1.817,1.817,0,1,1-1.817-1.855,1.836,1.836,0,0,1,1.817,1.855" transform="translate(0)" fill={color}/>
      </g>
    </svg>
  );
};

export default IconInstagram;
